<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Carbon\Carbon;

use Illuminate\Http\Request;

use Mail;
use Throwable;

class JobController extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // initialize data
        $data = [];
        if($request->search){
            // dd($request->search);
            $jobss = Job::where('title', 'LIKE', "%$request->search%")->get();

          
            $count_jobs = 0;
            foreach ($jobss as $job){
                // count jobs
                $count_jobs++;
                $user = DB::table('users')->where('id', $job->posted_by)->first();
                $company = DB::table('companies')->where('user_id', $job->posted_by)->first();
    
                $job['user'] = $user;
                $job['company'] = $company;
                $data[] = $job;
            }
            
        }else{
            $jobss = Job::get();
      
        
            $count_jobs = 0;
            foreach ($jobss as $job){
                // count jobs
                $count_jobs++;
                $user = DB::table('users')->where('id', $job->posted_by)->first();
                $company = DB::table('companies')->where('user_id', $job->posted_by)->first();
    
                $job['user'] = $user;
                $job['company'] = $company;
                $data[] = $job;
            }
    
        }

        $jobs = $this->paginate($data);
    
        return view('home.jobs_list', [ 'jobs' => $jobs, 'total_jobs' => $count_jobs, 'page' => 'job']);

    }

    public function ReturnSearchedJobs(Request $request){

    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function paginate($items, $perPage = 30, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [
            'path' => Paginator::resolveCurrentPath()
        ]);
    }

    public function FetchJobDetails(Request $request){
        $data = [];
        $job_id = $request->id;
        $job_count = DB::table('jobs')->where('id', $job_id)->get();
        if(count($job_count) > 0){
            // Job found
            // add to Report
            if(count(DB::table('reports')->where('job_id', $job_id)->where('ip', $request->ip())->get()) == 0){
                $report = new Report();
                $report->ip = $request->ip();
                $report->job_id = $job_id;
                $report->save();
            }

            $job_first = DB::table('jobs')->where('id', $job_id)->first();
            // Check for job deadline here
            $current_time = Carbon::now()->toDateTimeString();
            if($current_time > $job_first->deadline){
                // set job to not active
                $update_job = DB::table('jobs')->where('id', $job_id)->update(
                    [
                        'active' => 2, //reach deadline
                    ]
                );
            }
            $job = DB::table('jobs')->where('id', $job_id)->first();
            $$company_job_detail = DB::table('companies')->where('user_id', $job->posted_by)->first();
    
            $related_jobs = Job::inRandomOrder()->where('id', '!=', $job_id)->limit(3)->get();
            foreach ($related_jobs as $j){
                $company = DB::table('companies')->where('user_id', $j->posted_by)->first();
    
                $j['company'] = $company;
                $data[] = $j;
            }
    

            return view('home.job_details', [ 'job' => $job, 'jobs' => $data, 'user' => auth()->user() , 'company' => $$company_job_detail, 'page' => 'job']);
        }else{
            $related_jobs = Job::inRandomOrder()->limit(3)->get();
            foreach ($related_jobs as $job){
                $company = DB::table('companies')->where('user_id', $job->posted_by)->first();
    
                $job['company'] = $company;
                $data[] = $job;
            }
    
            return view('home.job_details', [ 'job' => '', 'jobs' => $data, 'page' => 'job']);
        }

    }

    public function ApplyForJob(Request $request){
        $user_id = $request->user_id;
        $job_id = $request->job_id;

        $count_applicants = DB::table('applicants')
            ->where('job_id', '=', $job_id)
            ->where('user_id', '=', $user_id)
            ->get();
       
        if(count($count_applicants) == 0){
            //not applied before, add to the database
            $applicant = new Applicant();
            $applicant->job_id = $job_id;
            $applicant->user_id = $user_id;
            
            if($applicant->save()){
                try{
                    // get job details
                    $job = DB::table('jobs')->where('id', $job_id)->first();
                    // get user info
                    $user = DB::table('users')->where('id', $user_id)->first();
                    // Send Message to the applicant
                    $msg = "<h1>Successfully Applied!</h1><br/>
                        
                    Hi, $user->firstname! <br/>

                    You have successfully applied for the role of <b>$job->title!</b><br/>
                    Your application has been sent.<br/>
                    Best of Luck!
                    ";


                    Mail::send(['html' => 'mail.default'],['msg'=> $msg], function($message) use($user){
                        $message->to($user->email);
                        $message->subject('Successfully Applied!');
                    });

                    // get recruiter info
                    $recruiter = DB::table('users')->where('id', $job->posted_by)->first();
                    // send message to the Recruiter also
                    $msg_recruiter = "<h1>An intern just applied to the job you posted!!</h1><br/>
                        
                    Hi, $recruiter->firstname! <br/>

                    <b>$user->firstname $user->lastname</b> has successfully applied for the role of <b>$job->title!</b><br/>
                    Kindly access your dashboard to access the intern full information.<br/>
                    ";


                    Mail::send(['html' => 'mail.default'],['msg'=> $msg_recruiter], function($message) use($recruiter){
                        $message->to($recruiter->email);
                        $message->subject('An intern just applied to your job posted!');
                    });

                } catch (Throwable $e) {
                    // report($e);
                    // return false;
                }
                return back()->with('success', 'You have successfully applied for the Job!');
            }else{
                return back()->with('error', 'Application was not sent successfully, kindly contact the support!');
            }

        }else{
            // already applied
            return back()->with('error', 'You have already applied to this Job!');
        }
    }
}
