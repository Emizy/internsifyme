<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Intern;
use App\Models\Skill;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{
   
       /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request)
    {


        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        if($user){
            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'username' => 'required',
                'email' => 'required|email',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:9048',
            ]);

            $input = $request->except('_method');

            if($imagePath = $request->file('avatar')){
                $imageName = time().'.'.$imagePath->getClientOriginalExtension();

                $imagePath->move('imgs/profile/',$imageName);
                $input['avatar'] = env('APP_URL').'/imgs/profile/'.$imageName;
            }

                $update_user = DB::table('users')->where('id', auth()->user()->id)->update($input);

                if($update_user){
                    $updated_user = DB::table('users')->where('id', auth()->user()->id)->first();
                    $data['user'] = $updated_user;
                    return $this->sendResponse($data, 'Profile updated successfully!');
                }else {
                    return $this->sendError('No changes update made', 'Null'); 
                }
        }else{
            return $this->sendError('No user found', 'Null'); 
        }

    }

    /*
    * Change password
    */
    public function changePassword(Request $request)
    {
        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        if($user){
            $request->validate([
                'oldpassword' => 'required',
                'password' => 'required|string|min:6|confirmed',
                'password_confirmation' => 'required|same:password'
            ]);

            if(Hash::check($request->oldpassword, $user->password)){
                if(DB::table('users')->where('id', auth()->user()->id)->update(['password' => bcrypt($request->password)])){
                    return $this->sendResponse('success', 'Your password is changed successfully!');                
                }else{
                    return $this->sendError('Your password is not changed successfully, try again!', 'Null'); 
                }
            }else{
                return $this->sendError('The password you provided does not match your old password', 'Null'); 
            }
        }else{
            return $this->sendError('No user found', 'Null'); 
        }

        
    }
    /*
    * fetchAuthUser
    */
    public function fetchAuthUser(Request $request)
    {
        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        if($user){
            $data['user'] = $user;
            return $this->sendResponse($data, 'User is fetched successfully!');                
        }else{
            return $this->sendError('No authenticated user found', 'Null'); 
        }
    }

     /*
    * getUserLength: This function calculates the user profile based on the 
    information user filled
    */
    public function getUserLength(Request $request)
    {
        $user = DB::table('users')
            ->where('id', auth()->user()->id)
            ->where('user_type', 0)
            ->first();
        if($user){
            $user_data = Intern::where('user_id', auth()->user()->id)->first();

            // Check if user had added skills 
            // $count = Skill::where('user_id', auth()->user()->id)->get()->count();
            $count = 0;
            /*
            * Get the whole lenght of the row attribute starting with 1 because of skill
            */
            $attribute_length = 1;
            $a = '';
            foreach ($user_data->getAttributes() as $a) {
                $attribute_length++;
                if (is_null($a) || $a == 'null') {
                    $count++;
                } 
            }
      
            $profile_lenght = floor((($attribute_length - ($count))/$attribute_length) * 100);
                // get intern and Verify the user
            $intern = Intern::where('user_id', auth()->user()->id)->first();
            if(($intern->verify == 0) && ($profile_lenght > 95)){
                DB::table('interns')->where('user_id', auth()->user()->id)->update(
                    [ 'verify' => 1, ]
                );
            }

                
            $data['profile_lenght'] = $profile_lenght;
            return $this->sendResponse($data, 'User Profile Lenght is fetched successfully!');  
        }else{
            return $this->sendError('No authenticated user found', 'Null'); 
        }
    }
}
