<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProjectRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
        public $user;
         public $project_title;
         public $email;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $project_title, $email)
    {

        $this->user=$user;
        $this->project_title=$project_title;
         $this->email=$email;
    }

      public function build()
    {
        return $this->subject('Welcome To Build Your Project || Project Registration Mail')->view('emails.project-register-mail',['user' => $this->user, 'data' => $this->project_title, 'email' => $this->email]);
    }

}
