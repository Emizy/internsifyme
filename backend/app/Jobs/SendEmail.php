<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $mail_data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $input['subject'] = $this->mail_data['subject'];

        // get intern with verified mail
        $interns = DB::table('users')->where('user_type', 0)
            ->where('email_verify', 1)
            ->where('email_notify', 1)
            ->get();

        foreach ($interns as $intern){
            $input['email'] = $intern->email;
            $input['name'] = $intern->firstname;

            // send Welcome mail to the Intern
            $msg = " Hi, $intern->firstname! <br/>

            This is to notify you that new Internship Job Position has been made active on InternsifyMe!<br/>

            Kindly, access your dashboard to see if it fit your profile and preference.
            ";

            Mail::send(['html' => 'mail.default'],['msg' => $msg ], function($message) use($input){
                $message->to($input['email'], $input['name']);
                $message->subject($input['subject']);
            });
           //sleep(30);
        }
    }
}
