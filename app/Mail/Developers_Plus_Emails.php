<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Developers_Plus_Emails extends Mailable
{
    use Queueable, SerializesModels;

    protected $emailMessage;
    protected $emailSubject;


    /**
     * Create a new message instance.
     *
     * @param string $emailMessage
     * @param string $emailSubject
     */
    public function __construct(string $emailMessage, string $emailSubject)
    {
        $this->emailMessage = $emailMessage;
        $this->emailSubject = $emailSubject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->emailSubject)
            ->text('plain')
            ->with($this->emailMessage, 'text/html');
    }

}
