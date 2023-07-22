<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Company;
use App\Models\Applicant;
use App\Models\Report;
use App\Models\Job;

class ReportController extends BaseController
{
    public function fetchReport (Request $request){

        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        if ($user->user_type == 1){
            //Recruiter
            $created_jobs = Job::where('posted_by', auth()->user()->id)->count();
            // get the company associated with the user & count view
            $company = Company::where('user_id', auth()->user()->id)->first();
            $profile_view = Report::where('company_id', $company->id)->count();
            // count applied intern, but get the job Id first
            $jobs = Job::where('posted_by', auth()->user()->id)->get();
            $count_jobs = 0;
            $count_job_views = 0;
            foreach($jobs as $job){
                $applied_interns = DB::table('applicants')->where('job_id', $job->id)->count();
                if($applied_interns > 0){
                    $count_jobs++;
                }
                $total_job_view = DB::table('reports')->where('job_id', $job->id)->get();
                if(count($total_job_view) > 0){
                    $count_job_views++;
                }
            }

            $data['profile_view'] = $profile_view;
            $data['created_jobs'] = $created_jobs;
            $data['applied_interns'] = $count_jobs;
            $data['total_job_view'] = $count_job_views;

            return $this->sendResponse($data, 'Report fetched successfully!');

        }
    }

    public function fetchInternReport (Request $request){
      $intern = DB::table('interns')->where('user_id', auth()->user()->id)->first();
      $profile_view = count(DB::table('reports')->where('intern_id', $intern->id)->get());
      //   get total applied jobs
      $applied_jobs = count(DB::table('applicants')->where('user_id', auth()->user()->id)->get());
    
      $data['profile_view'] = $profile_view;
      $data['applied_jobs'] = $applied_jobs;
      $data['verify'] = $intern->verify;
      $data['certify'] = $intern->certify;

      return $this->sendResponse($data, 'Report fetched successfully!');
    }

    public function jobReport (Request $request, $id){
        $total_applicants = count(DB::table('applicants')->where('job_id', $id)->get());
        $total_view = count(DB::table('reports')->where('job_id', $id)->get());

        $data['total_applicants'] = $total_applicants;
        $data['total_view'] = $total_view;

        return $this->sendResponse($data, 'Report fetched successfully!');
    }

}
