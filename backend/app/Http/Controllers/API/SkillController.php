<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Intern;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SkillController extends BaseController
{
    
    public function index()
    {
      
        $skills = DB::table('skills')->where('user_id', auth()->user()->id)->get();
        
        if ($skills){
            $data['skills'] = $skills;
            return $this->sendResponse($data, 'Profile fetch successfully!');
        }else{
            return $this->sendError('No skills added yet', 'Null'); 
        }

    } 

    public function store(Request $request)
    {
       
        $this->validate($request, [
            'name' => 'required',
            'level' => 'required',
        ]);

        $skills = DB::table('skills')
            ->where('name', $request->name)
            ->where('user_id', auth()->user()->id)->get();
        
        if(!count($skills) > 0){
            //save skill here
            $skill = new Skill();
            $skill->user_id  = auth()->user()->id;
            $skill->name = $request->name;
            $skill->level = $request->level;
            $skill->save();

            return $this->sendResponse(null, 'Skill added successfully!');
        }else{
            return $this->sendError('Not added, skill already exists on your profile!', null); 
        }

    }

    
    public function update(Request $request, $id)
    {
        $skill = DB::table('skills')->where('id', $id)->first();
        if($skill){
            $this->validate($request, [
                'name' => 'required',
                'level' => 'required',
            ]);

            $update_skill = DB::table('skills')->where('id', $id)->update(request()->all());

            if($update_skill){
                return $this->sendResponse(null, 'Skill updated successfully!');
            }else {
                return $this->sendError('Skill not updated!', null); 
            }


        }else{
            return $this->sendError('Skill not found!', null); 
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
        $delete_skill = DB::table('skills')->where('id', $id)->where('user_id', auth()->user()->id)->delete();

        if($delete_skill){   
            return $this->sendResponse(null, 'Skill deleted Successfully!');
        }else{
            return $this->sendError('Not deleted, kindly try again!', 'Null'); 
        }

    }


}
