<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Intern;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\InternResource;

class InternController extends BaseController
{

    public function index()
    {
        
        $interns = DB::table('interns')->get();

        return $this->sendResponse($interns, 'Fetched Successfully!');
    }

    public function store(Request $request)
    {
        // check of intern exist already
        $intern = Intern::where('user_id', auth()->user()->id)->first();

        if(is_null($intern) ){
            $this->validate($request, [
                'title' => 'required',
                'bio' => 'required',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);
    
            if ($image = $request->file('avatar')) {
                $destinationPath = 'imgs/profile/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->avatar = env('APP_URL').'/imgs/profile/'.$profileImage;
            }else{
                $request->avatar = env('APP_URL').'/imgs/profile/no_avatar.png';
            }

            if ($image = $request->file('banner')) {
                $destinationPath = 'imgs/profile/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->banner = env('APP_URL').'/imgs/profile/'.$profileImage;
            }else{
                $request->banner = env('APP_URL').'/imgs/profile/no_banner.png';
            }


            // update the user info
            DB::table('users')
                ->where('id', auth()->user()->id)
                ->update([
                    'avatar' => $request->avatar, 
                    'country' => $request->country, 
                    'state' => $request->state, 
                    'city' => $request->city, 
                    'zip_code' => $request->zip_code, 
                ]);
    
            $intern = new Intern();
            $intern->user_id = auth()->user()->id;
            $intern->title = $request->title;
            $intern->bio = $request->bio;
            $intern->verify = 0;
            $intern->certify = 0;
            $intern->experience = $request->experience;
            $intern->banner = $request->banner;
            $intern->education = $request->education;
            $intern->education_level = $request->education_level;
            $intern->cv = $request->cv;
            $intern->portfolio = $request->portfolio;
            $intern->language = $request->language;
            $intern->location = $request->location;
            $intern->available = 1;
            $intern->country = $request->country;
            $intern->state = $request->state;
            $intern->city = $request->city;
            $intern->zip_code = $request->zip_code;
            $intern->website = $request->website;
            $intern->facebook = $request->facebook;
            $intern->instagram = $request->instagram;
            $intern->twitter = $request->linkedin;
            
            if ($intern->save()){
                 // Company profile created succesfull, now set the value: 1
                 DB::table('users')->where('id', auth()->user()->id)->update(
                    [
                        'profile_created' => 1,
                    ]
                );

                $data['intern'] = $intern->toArray();
                return $this->sendResponse($data, 'Intern Created Successfully!');
            }else{
                return $this->sendError('Intern not created successfully!', 'null');  
            }
        }else{
            return $this->sendError('Your Intern profile is already created', 'null'); 
        }
        
    }

    public function update(Request $request, $id)
    {
        $intern = DB::table('interns')->where('id', $id)->first();
        if($intern){
            $this->validate($request, [
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);

            if ($image = $request->file('banner')) {
                $destinationPath = 'profile/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $request->banner = $profileImage;
            }else{
                $intern->banner = "no_banner.png";
            }

            $update_intern = DB::table('interns')->where('id', $id)->update(request()->all());

            if($update_intern){
                return $this->sendResponse('success', 'Intern updated successfully!');

            }else {
                return $this->sendError('No update made', 'Null'); 
            }


        }else{
            return $this->sendError('error', 'No intern found'); 
        }
    }

    public function destroy($id)
    {

        $intern = DB::table('interns')->where('id', $id)->first();

        if($intern){   
            if (DB::table('interns')->where('id', $id)->delete()) {
                return $this->sendResponse('success', 'Intern deleted successfully!');
            } else {
                return $this->sendError('The intern can not deleted', 'Null'); 
            }
        }else{
            return $this->sendError('Not intern with that ID found', 'Null'); 
        }

    }

        /*
    * fetchAllInternsRandomly
    */
    public function fetchAllInternsRandomly(Request $request)
    {

        $interns = Intern::inRandomOrder()->limit(48)->get();
        $data['interns'] = [];

        foreach ($interns as $intern){
            $user = DB::table('users')->where('id', $intern->user_id)->first();
            $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();

            $intern['skills'] = $skills;
            $intern['user'] = $user;
            $data['interns'][] = $intern;
        }
        return $this->sendResponse($data, 'Interns fetched successfully!');
        
    }

        /*
    * fetchAllInternsRandomly
    */
    public function fetchActiveInternsRandomly(Request $request)
    {
        
        $interns = Intern::inRandomOrder()->where('available', 1)->limit(3)->get();
        $data['interns'] = [];

        foreach ($interns as $intern){
            $user = DB::table('users')->where('id', $intern->user_id)->first();
            $skills = DB::table('skills')->where('user_id', $intern->user_id)->get();

            $intern['skills'] = $skills;
            $intern['user'] = $user;
            $data['interns'][] = $intern;
        }
        return $this->sendResponse($data, 'Interns fetched successfully!');
        
    }

        /*
    * fetchAuthIntern
    */
    public function fetchAuthIntern(Request $request)
    {
        
        $intern = DB::table('interns')->where('user_id', auth()->user()->id)->first();
        
        if($intern){
            $user = DB::table('users')->where('id', auth()->user()->id)->first();
            
            
            // $intern['user'] = $user;
            $data['intern'] = $intern;
            $data['intern']->user = $user;

            return $this->sendResponse($data, 'Intern Profile fetched successfully!');
        }else{
            return $this->sendError('No intern profile with this user', 'Null'); 
        }
    
    }

    
    public function updateInternInfo(Request $request){

        
        $intern = DB::table('interns')->where('user_id', auth()->user()->id)->first();
        if($intern){
            $this->validate($request, [
                // 'title' => 'required',
                // 'bio' => 'required',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);
        
            $input = $request->except('_method');

            // attend to logo
            if($imagePath = $request->file('avatar')){
                $imageName = time().'.'.$imagePath->getClientOriginalExtension();

                $imagePath->move('imgs/profile/',$imageName);
                $input['avatar'] = env('APP_URL').'/imgs/profile/'.$imageName;
                $request->avatar = $input['avatar'];
            }

        //      // attend to logo
            if($imagePath = $request->file('banner')){
                $imageName = time().'.'.$imagePath->getClientOriginalExtension();

                $imagePath->move('imgs/profile/',$imageName);
                $input['banner'] = env('APP_URL').'/imgs/profile/'.$imageName;
            }

            $update_intern = DB::table('interns')->where('user_id', auth()->user()->id)->update($input);

            if($update_intern){
                return $this->sendResponse('success', 'Profile updated successfully!');
            }else {
                return $this->sendError('No update made', 'Null'); 
            }


        }else{
            return $this->sendError('No intern found', 'Null'); 
        }


    }

    //attend to intern skills here 
    public function fetchUserSkills(Request $request){
        
        $skills = DB::table('skills')->where('user_id', auth()->user()->id)->get();
        
        if ($skills->count() > 0){
            $data['skills'] = $skills;
            return $this->sendResponse($data, 'Profile fetch successfully!');
        }else{
            return $this->sendError('No skills added yet', 'Null'); 
        }
    }

}
