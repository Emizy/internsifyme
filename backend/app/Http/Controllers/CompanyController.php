<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Report;

class CompanyController extends Controller
{
           /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $interns = Intern::inRandomOrder()->limit(12)->get();
      
        // $data = [];

        // foreach ($interns as $intern){
        //     $user = DB::table('users')->where('id', $intern->user_id)->first();
        //     $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();

        //     $intern['skills'] = $skills;
        //     $intern['user'] = $user;
        //     $data[] = $intern;
        // }

        // return view('home.find_interns', [ 'interns' => $data,  'page' => 'intern']);

    }

    public function FetchCompanyDetails(Request $request){
        $company_id = $request->id;
        $company = DB::table('companies')->where('id', $company_id)->first();
       
        if(count(DB::table('reports')->where('company_id', $company_id)->where('ip', $request->ip())->get()) == 0){
            $report = new Report();
            $report->ip = $request->ip();
            $report->company_id = $company_id;
            $report->save();
        }

        // get company posted jobs
        $jobs = DB::table('jobs')->where('posted_by', $company->user_id)->get();
        $job_count = count(DB::table('jobs')->where('posted_by', $company->user_id)->get());
        

        return view('home.company_detail', [ 'company' => $company, 'jobs' => $jobs, 'total_job' => $job_count, 'page' => 'company']);
    }
}
