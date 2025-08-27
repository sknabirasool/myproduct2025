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
         public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $data)
    {

          $this->user=$user;
            $this->data=$data;
    }

      public function build()
    {
        return $this->subject('Welcome To Build Your App || Project Registration Mail')->view('emails.project-register-mail',['user' => $this->user, 'data' => $this->data]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Project Registration Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
