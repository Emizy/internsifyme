<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use App\Models\Intern;
use App\Models\Applicant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Mail;
use Throwable;
use Illuminate\Support\Facades\Log; 
class JobController extends BaseController
{
    public function index()
    {
        
        $jobs = DB::table('jobs')->get();
        $data['jobs'] = $jobs;

        $company = Company::where('user_id', auth()->user()->id)->first();
        $data['company_logo'] = $company->logo;

        return $this->sendResponse($data, 'Fetched Successfully!');
    } 

    public function store(Request $request)
    {
       
        $this->validate($request, [
            'title' => 'required',
            'about_role' => 'required',
            'responsibilities' => 'required',
            'requirements' => 'required',
            'benefits' => 'required',
            'location' => 'required',
            'deadline' => 'required',
        ]);

        
        $job =  new Job();
        $job->posted_by = auth()->user()->id;
        $job->title = $request->title;
        $job->stipend = $request->stipend;
        $job->currency = $request->currency;
        $job->type = $request->type;
        $job->active = 1; // make active
        $job->level = $request->level;
        $job->about_role = $request->about_role;
        $job->responsibilities = $request->responsibilities;
        $job->requirements = $request->requirements;
        $job->benefits = $request->benefits;
        $job->location = $request->location;
        $job->deadline = $request->deadline;
        
        if ($job->save()){
            // Send Message to the Admin
            try{
               
                $msg = "<h1>New Job has been Posted Successfully</h1><br/>
                    
                Hi Admin <br/>

                New Job has been Posted Successfully!
                ";


                Mail::send(['html' => 'mail.default'],['msg'=> $msg], function($message){
                    $message->to('internsifyme@gmail.com');
                    $message->subject('New Job Posted Successfully');
                });

                   //Send Message to the Intern
                $mail_data = [
                    'subject' => 'A new Internship Job is live 🔥',
                ];
                
                dispatch(new \App\Jobs\SendEmail($mail_data))->delay(now()->addSeconds(2));
 

            } catch (Throwable $e) {
                // report($e);
                // return false;
            }

            $data['job'] = $job->toArray();
            return $this->sendResponse($data, 'Job Created Successfully!');
        }else{
            return $this->sendError('error', 'Job not Created Successfully!');  
        }
        
    }

    
    public function update(Request $request, $id)
    {
        $id = number_format($id);
        $job = DB::table('jobs')->where('id', $id)->first();
        if($job){
            $this->validate($request, [
                'title' => 'required',
                'about_role' => 'required',
                'responsibilities' => 'required',
                'requirements' => 'required',
                'benefits' => 'required',
                'location' => 'required',
                'deadline' => 'required',
            ]);

            // ->$request->except('_method')
            // $update_job = DB::table('jobs')->where('id', $id)->update(request()->all()->$request->except('_method'));

        
            try { 
                $update_job = DB::table('jobs')->where('id', $id)->update(
                    [
                        'title' => $request->title,
                        'about_role' => $request->about_role,
                        'responsibilities' => $request->responsibilities,
                        'requirements' => $request->requirements,
                        'benefits' => $request->benefits,
                        'location' => $request->location,
                        'deadline' => $request->deadline,
                        'stipend' => $request->stipend,
                        'currency' => $request->currency,
                        'type' => $request->type,
                        'level' => $request->level,
                        'active' => $request->active,
                        'application_link' => $request->application_link,
                    ]
                );
                return $this->sendResponse('success', 'Job updated successfully!');
              } catch(\Illuminate\Database\QueryException $ex){ 
                // dd($ex->getMessage()); 
                return $this->sendError($ex->getMessage(), 'Null');
                // Note any method of class PDOException can be called on $ex.
              }

            // if($update_job){
            //     return $this->sendResponse('success', 'Job updated successfully!');
            // }else {
            //     return $this->sendError('No update made', 'Null'); 
            // }


        }else{
            return $this->sendError('error', 'No Job found'); 
        }
    }

    public function show(Request $request, $id)
    {
        $job = DB::table('jobs')->where('id', $id)->first();

        if($job){
            $data['job'] = $job;

            $company = Company::where('user_id', auth()->user()->id)->first();
            $data['company_logo'] = $company->logo;

            return $this->sendResponse($data, 'Fetched Successfully!');
        }else{
            return $this->sendError('No job with that ID is found', 'Null'); 
        }
    }

    public function destroy($id)
    {
        $job = DB::table('jobs')->where('id', $id)->where('posted_by', auth()->user()->id)->first();

        if($job){   
            if (DB::table('jobs')->where('id', $id)->delete()) {
                return $this->sendResponse('success', 'Job deleted successfully!');
            } else {
                return $this->sendError('The job can not deleted', 'Null'); 
            }
        }else{
            return $this->sendError('Not job with that is ID found', 'Null'); 
        }

    }
 
    public function fetchRecruiterJobs(Request $request)
    {
        $jobs = Job::where('posted_by', auth()->user()->id)->limit(3)->get();
        $data['jobs'] =  [];

        foreach($jobs as $job){
            $company = DB::table('companies')->where('user_id', $job->posted_by)->first();

            $job['company'] = $company;
            $data['jobs'][] = $job;
        }

        return $this->sendResponse($data, 'Fetched Successfully!');
    }

       // fetchRecruiterAllJobs
    public function fetchRecruiterAllJobs(Request $request)
    {
        $jobs = Job::where('posted_by', auth()->user()->id)->orderBy('id', 'DESC')->get();
        $data['jobs'] =  [];

        foreach($jobs as $job){
            $company = DB::table('companies')->where('user_id', $job->posted_by)->first();

            $job['company'] = $company;
            $data['jobs'][] = $job;
        }

        return $this->sendResponse($data, 'Fetched Successfully!');
    }

    public function fetchRecentJobs(Request $request)
    {
        $jobs = Job::limit(30)->get();
        $data['jobs'] = [];

        foreach ($jobs as $job){
            $company = DB::table('companies')->where('user_id', $job->posted_by)->first();
         
            $job['company'] = $company;
            $data['jobs'][] = $job;
        }
        return $this->sendResponse($data, 'Fetched Successfully!');
    }

    public function fetchUserAppliedJobs(Request $request)
    {
        $applied_jobs = Applicant::where('user_id', auth()->user()->id)->get();

        $data['applied_jobs'] = [];

        foreach($applied_jobs as $a_job){
            $job = DB::table('jobs')->where('id', $a_job->job_id)->first();
            $company = DB::table('companies')->where('user_id', $job->posted_by)->first();

            $a_job['job'] = $job;
            $a_job['company'] = $company;
            $data['applied_jobs'][] = $a_job;
        }

        return $this->sendResponse($data, 'Fetched Successfully!');
    }

    public function listJobApplicants(Request $request, $id)
    {
        $job_applicants = Applicant::where('job_id', $id)->get();
        $data['applicants'] = [];

        foreach($job_applicants as $j_applicant){
            // user_id == applicant_id
            $user = DB::table('users')->where('id', $j_applicant->user_id)->first();

            $j_applicant['user'] = $user;
            $data['applicants'][] = $j_applicant;
        }

        return $this->sendResponse($data, 'Fetched Successfully!');
    }

    public function PopulateJobs(Request $request){
       Log::info("am here for it".print_r($request->jobs,true));
        try { 
            // $validated_data = Validator::make(["jobs"=> $request->jobs], [
            //     'jobs' => 'required',
            // ]);
            Log::info("Data". print_r($request->all(),true));
            if(count($request->jobs) == 0){
                return $this->sendError("Invalid data sent", 'Null');
            };
            $rule = [
                'title' => 'required',
                'description' => 'required',
                'salary' => 'required',
                'application_link' => 'required',
                'source' => 'required',
                'location' => 'required',
                'company_name' => 'required',
            ];
            $job_list = $request->jobs;
            foreach($job_list as $job){
                $payload = [
                    'title' => $job["title"],
                    'responsibilities' => $job["description"],
                    'location' => $job["location"],
                    'salary' => $job["salary"],
                    'type' => "Full-Time",
                    'company_name' =>$job["company_name"],
                    "source" => $job["source"],
                    'active' => 1,
                    'application_link' => $job["application_link"],
                ];
                $validation = Validator::make($payload, $rules);
                if(!$validation->fails()){
                    Log::info("Processing log data ".print_r($job));
                    $resp = $this->processJob($job);
                } else{
                    Log::info("job data not valid".print_r($job));
                }
            };
            
            return $this->sendResponse([], 'Fetched Successfully!');

    } catch(\Exception $e){ 
        Log::error("Something occurred why populating jobs due to ". $e->getMessage());
        return $this->sendError($e->getMessage(), 'Null');
      }

    }

    public function processJob($job){
        try{
            $exist_job = DB::table('jobs')->where('company_name',"=",$job["company_name"])->where('title',"=",$job["title"])->first();
            if($exist_job){
                Log::info("Updating existing job entry with payload ". print_r($job, true) ."for job with id ". $job->id);

                 $update_job = DB::table('jobs')->where('id', $exist_job->id)->update(
                    [
                        'title' => $job["title"],
                        'responsibilities' => $job["responsibilities"],
                        'location' => $job["location"],
                        'source' => $job["source"],
                        'active' =>$job["active"],
                        "salary" => $job["salary"],
                        'company_name' =>$job["company_name"],
                        "type" =>$job["type"],
                        'application_link' => $job["application_link"],
                    ]
                );
            } else{
                Log::info("Creating new job entry with payload ". print_r($job, true));
                DB::table('jobs')->insert($job);
                
            }
        }catch(\Exception $e){
            Log::error("Something occurred why populating jobs due to ". $e->getMessage());
        }
    }
}
