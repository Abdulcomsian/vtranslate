<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobPostedUserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $jobid;
    public function __construct($user, $jobid)
    {
        $this->user = $user;
        $this->jobid = $jobid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.jobposteduser')
            ->subject('vtranslate')
            ->with('data', ['user' => $this->user, 'jobid' => $this->jobid]);
    }
}
