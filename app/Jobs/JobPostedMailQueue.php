<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\JobPostedUserMail;
use App\Models\JobsPairLanguages;
use App\Models\User;
use Mail;

class JobPostedMailQueue implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::with('userlanguages')->where('user_status', 'Freelancer')->get();
        $jobspair = JobsPairLanguages::where('jobs_id', $this->data)->get();
        $i = 0;
        foreach ($users as $user) {
            foreach ($user->userlanguages as $lang) {
                foreach ($jobspair as $pari) {
                    if ($lang->from_languages == $pari->from_lang &&  $lang->to_languages == $pari->to_lang) {
                        Mail::to($user->email)->send(new JobPostedUserMail());
                        $i = 1;
                        break;
                    }
                }
                if ($i == 1) {
                    break;
                }
            }
        }
    }
}
