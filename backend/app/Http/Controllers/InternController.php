<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Intern;
use App\Models\Skill;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InternController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interns = Intern::inRandomOrder()->limit(72)->get();
      
        $data = [];

        foreach ($interns as $intern){
            $user = DB::table('users')->where('id', $intern->user_id)->first();
            $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();

            $intern['skills'] = $skills;
            $intern['user'] = $user;
            $data[] = $intern;
        }

        return view('home.find_interns', [ 'interns' => $data,  'page' => 'intern']);

    }

    public function fetchUserProfile(Request $request)
    {
        $username_route = trim($request->route('username'));
        $user_detail = DB::table('users')->where('username', $username_route)->first();

        // get 2 rand intern here also
        $data = [];
        
        if($user_detail){
            // get user intern profile
            $intern_profile = Intern::where('user_id', $user_detail->id)->first();
           
            // check if exists
            if(!count(DB::table('reports')->where('ip', $request->ip())->where('intern_id', $intern_profile->id)->get()) > 0){
                // add report
                $report = new Report();
                $report->ip = $request->ip();
                $report->intern_id = $intern_profile->id;
                $report->save();
            }

            $user_skills = DB::table('skills')->where('user_id', $user_detail->id)->get();

            $interns = Intern::inRandomOrder()->where('user_id', '!=', $user_detail->id)->limit(2)->get();
      
            foreach ($interns as $intern){
                $user = DB::table('users')->where('id', $intern->user_id)->first();
                $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();

                $intern['skills'] = $skills;
                $intern['user'] = $user;
                $data[] = $intern;
            }
            return view('home.user_profile', ['user' => $user_detail, 'interns' => $data, 'intern_profile' => $intern_profile, 'skills' => $user_skills, 'page' => 'profile']);
        }else{
            // redirect here
            $interns = Intern::inRandomOrder()->limit(2)->get();
      
            foreach ($interns as $intern){
                $user = DB::table('users')->where('id', $intern->user_id)->first();
                $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();

                $intern['skills'] = $skills;
                $intern['user'] = $user;
                $data[] = $intern;
            }

            return view('home.user_profile', ['user' => '','interns' => $data, 'page' => 'profile']);
        }
       
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        // redirect here
        $interns = Intern::inRandomOrder()->limit(4)->get();

        if(count($interns) > 0){
            foreach ($interns as $intern){
                $user = DB::table('users')->where('id', $intern->user_id)->first();
                $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();
    
                $intern['skills'] = $skills;
                $intern['user'] = $user;
                $data[] = $intern;
            }

            return view('home.index', ['interns' => $data, 'page' => 'home']);
        }else{

            return view('home.index', ['interns' => '', 'page' => 'home']);
        }
    
    }

    
    public function FetchInterns()
    {
        // redirect here
        $interns = Intern::inRandomOrder()->limit(4)->get();

        if(count($interns) > 0){
            foreach ($interns as $intern){
                $user = DB::table('users')->where('id', $intern->user_id)->first();
                $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();
    
                $intern['skills'] = $skills;
                $intern['user'] = $user;
                $data[] = $intern;
            }
            return view('home.employers', ['interns' => $data, 'page' => 'employers']);
        }else{
            return view('home.employers', ['interns' => '', 'page' => 'employers']);
        }

        
    }
}
