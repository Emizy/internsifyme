<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\UserVerify;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon; 
use Mail;


use Throwable;

class AuthController extends BaseController
{
    public function register(Request $request)
    {
       
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone_no' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
   
        $data = $request->all();
        $user = $this->createUser($data);

        // generate token
        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' => $user->id, 
              'token' => $token,
        ]);

        // if user type is intern, create schoolsify student account
        // if($user->user_type == 0){
        //      // URL
        //     $apiURL = env('SCHOOLISY_API_ROOT').'/v1/auth/login/';

        //     // POST Data
        //     $postInput = [
        //         'username' => env('INTERNSIFYME_SCHOOLSIFY_MAIL'),
        //         'password' => env('INTERNSIFYME_SCHOOLSIFY_PASSWORD'),
        //     ];
        
        //     // Headers
        //     $headers = [
        //         //...
        //     ];

        //     $response = Http::withHeaders($headers)->post($apiURL, $postInput);
        
        //     $statusCode = $response->status();
        //     $responseBody = json_decode($response->getBody(), true);
            
        //     $status = $responseBody['status'];
        //     if($status == 200){
        //        // then create student account
        //        $bearer_token = $responseBody['token']['access']; // body response

        //        // URL
        //       $apiURL = env('SCHOOLISY_API_ROOT').'/v1/student/';

        //       // POST Data
        //       $postInput = [
        //         "full_name" => $user->firstname." ".$user->lastname,
        //         "display_name" => $user->firstname." ".$user->lastname,
        //         "mobile" => $user->phone_no,
        //         "by_invite" => true,
        //         "email" => $user->email,
        //         "status" => "active",
        //         "is_newsletter" => true
        //       ];
          
        //       // Headers
        //       $headers = [
        //           "Authorization" => "Bearer ".$bearer_token
        //       ];

        //       //send reponse
        //       Http::withHeaders($headers)->post($apiURL, $postInput);

        //     }
        // } 


        if($user){
             //check if mail send 
            $send_status = 1;
            
            try {
                // Send Mail
                Mail::send('mail.emailVerificationEmail', ['token' => $token], function($message) use($user){
                    $message->to($user->email);
                    $message->subject('Verify your mail, '. $user->firstname);
                });
                $send_status = 1;
            } catch (Throwable $e) {
                $send_status = 0;
                // report($e);
                // return false;
            }

            //if mail not send? allow registration instead?
            if($send_status == 0){
                DB::table('users')->where('id', $user->email)->update(['email_verify' => 1, 'email_verified_at' =>  Carbon::now()]);

             
                if($user->user_type == 0){
                     // send Welcome mail to the Intern
                     $msg = "<h1>Welcome to InternsifyMe!</h1><br/>
                     
                     Hi, $user->firstname! <br/>

                     <p>We're thrilled to welcome you to InternsifyMe, the premier platform for training and internship opportunities for students. We understand that you're looking to develop your skills and launch a successful career, and we're here to help you achieve your goals.</p>

                     <p>At InternsifyMe, we offer a wide range of training and internship programs designed to help you gain hands-on experience in your desired field. Our programs are led by experienced mentors who have worked with top companies in the industry, and who are passionate about sharing their knowledge and helping students succeed.</p>
                     
                     <p>Our training programs are tailored to equip you with the skills and knowledge you need to excel in your career. Our internship programs provide you with an opportunity to gain real-world experience and build a strong professional network.</p>
                     
                     <p>We believe that our students are the foundation of our success, and we're committed to providing you with the best possible experience. Our team is here to support you every step of the way, from the application process to the completion of your program.</p>
                     
                     <p>So, are you ready to take the first step towards your dream career? Browse our programs and apply today to join our community of successful learners.</p>
                     
                     <p>Welcome to InternsifyMe!</p>
                     ";


                    Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message) use($user){
                        $message->to($user->email);
                        $message->subject('Welcome to InternsifyMe!');
                    });

                    // Send Message to the Admin
                    $msg = "<h1>New Intern Registers!</h1><br/>
                     
                    Hi, <br/> $user->firstname $user->lastname new intern has successfully registered
                    ";

                    Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message){
                        $message->to('internsifyme@gmail.com');
                        $message->subject('New Intern Registers');
                    });

                }elseif($user->user_type == 1){

                       // send Welcome mail to the Recruite
                       $msg = "<h1>Welcome to InternsifyMe!</h1><br/>
                     
                       Hi, $user->firstname! <br/>
  
                       Welcome to InternsifyMe
                       ";
  
  
                      Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message) use($user){
                          $message->to($user->email);
                          $message->subject('Welcome to InternsifyMe!');
                      });
  
                      // Send Message to the Admin
                      $msg = "<h1>New Intern Recruiter!</h1><br/>
                       
                      Hi, <br/> new recruiter has successfully registered
                      ";
  
                      Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message){
                          $message->to('internsifyme@gmail.com');
                          $message->subject('New Recruiter Registers');
                      });
  
                   
                }
                
            }
            
            $success['token'] = $user->createToken('InternsifyMePassportAuth')->accessToken;
  
            return $this->sendResponse($success, 'User register successfully!');
        }else{
            return $this->sendError('Validation Error.', $validator->errors());  
        }
    }

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createUser(array $data)
    {
        // unique username
        $username = strtolower(str_replace(' ', '', $data['firstname']."".$data['lastname']."-".substr(str_shuffle("1234567890"), 0, 2)."".substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 3)));
        
        $avatar_link = env('APP_URL').'/imgs/profile/no_avatar.png';

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $username,
            'email' => $data['email'],
            'phone_no' => $data['phone_no'],
            'user_type' => $data['user_type'],
            'avatar' => $avatar_link,
            'password' => bcrypt($data['password']),
        ]);
    }

       /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('InternsifyMePassportAuth')-> accessToken; 
            $success['user'] =  $user;
            // check if verify
            if($user->email_verify == 0){
                return $this->sendError('Kindly verify your mail to login', 'Null');
            }else{
                // count user login
                $user->login_count = $user->login_count + 1;
                $user->save();
                return $this->sendResponse($success, 'User login successfully.');
            }
            
        } 
        else{ 
            return $this->sendError('Kindly provide valid login details', 'Null'); 
        } 
    }


     /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = DB::table('users')->where('id',$verifyUser->user_id)->first();
            $firstname = $user->firstname;
            $email = $user->email;

            if(!$user->email_verify) {
                DB::table('users')->where('id', $verifyUser->user_id)->update(['email_verify' => 1, 'email_verified_at' =>  Carbon::now()]);

             
                if($user->user_type == 0){
                     // send Welcome mail to the Intern
                     $msg = "<h1>Welcome to InternsifyMe!</h1><br/>
                     
                     Hi, $user->firstname! <br/>

                     Welcome to InternsifyMe
                     ";


                    Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message) use($user){
                        $message->to($user->email);
                        $message->subject('Welcome to InternsifyMe!');
                    });

                    // Send Message to the Admin
                    $msg = "<h1>New Intern Registers!</h1><br/>
                     
                    Hi, <br/> new intern has successfully registered
                    ";

                    Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message){
                        $message->to('internsifyme@gmail.com');
                        $message->subject('New Intern Registers');
                    });

                }elseif($user->user_type == 1){

                       // send Welcome mail to the Recruite
                       $msg = "<h1>Welcome to InternsifyMe!</h1><br/>
                     
                       Hi, $user->firstname! <br/>
  
                       Welcome to InternsifyMe
                       ";
  
  
                      Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message) use($user){
                          $message->to($user->email);
                          $message->subject('Welcome to InternsifyMe!');
                      });
  
                      // Send Message to the Admin
                      $msg = "<h1>New Intern Registers!</h1><br/>
                       
                      Hi, <br/> new recruiter has successfully registered
                      ";
  
                      Mail::send(['html' => 'mail.welcome'],['msg'=> $msg], function($message){
                          $message->to('internsifyme@gmail.com');
                          $message->subject('New Recruiter Registers');
                      });
  
                   
                }
                
                header("Location: ".env('APP_URL')."/login?emailverify=1");
                exit();
                //return $this->sendResponse('Your e-mail is verified. You can now login.', 'Null');
            } else {
                header("Location: ".env('APP_URL')."/login?emailverify=0");
                exit();
                //return $this->sendError('Your e-mail is already verified. You can now login.', 'Null');
            }
        }
        header("Location: ".env('APP_URL')."/login?emailverify=2");
        exit();
     // return $this->sendError('error', $message);
    }

              /**
       * Write code on Method
       *
       * @return response()
       */
    public function resetpassword(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required|same:password'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return $this->sendError('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => bcrypt($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
          return $this->sendResponse('success', 'Your password has been successfully changed!');
      }

               /**
       * Write code on Method
       *
       * @return response()
       */
      public function resetpasswordrequest(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
          ]);
  
          $token = Str::random(64);
  
          $password_reset = DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          if($password_reset){
            
            if(Mail::send(['html' => 'mail.forgetPassword'], ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            })){
                return $this->sendResponse(null, 'We have e-mailed your password reset link!');
            }else{
                return $this->sendError('error', 'We are unable to e-mailed your password reset link. please check your mail try again!');
            }

            // return $this->sendResponse('success', 'We have e-mailed your password reset link!');
          }else{
            return $this->sendError('error', 'We are unable to e-mailed your password reset link. please try again!');
          }
      }

       /**
       * Write code on Method
       *
       * @return response()
       */
    public function resetpasswordbytoken($token) { 
        return view('home.forgetPassword', ['token' => $token]);
    }

           /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => bcrypt($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
  
          return redirect()->back()->with('success', 'Your password has been changed, you can now login!');
      }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();

        return $this->sendResponse("success", 'Logged out successfully!');
    }
}