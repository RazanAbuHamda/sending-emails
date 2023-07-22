<?php
// app/Jobs/SendEmailJob.php
namespace App\Jobs;

use App\Mail\Developers_Plus_Emails;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailMessage;
    protected $emailSubject;
    protected $recipients;

    /**
     * Create a new job instance.
     *
     * @param string $emailMessage
     * @param string $emailSubject
     * @param array $recipients
     */
    public function __construct(string $emailMessage, string $emailSubject, array $recipients)
    {
        $this->emailMessage = $emailMessage;
        $this->emailSubject = $emailSubject;
        $this->recipients = $recipients;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->recipients as $recipient) {
            Mail::to($recipient)->send(new Developers_Plus_Emails($this->emailMessage, $this->emailSubject));
            // You can add some delay here if needed to avoid reaching the email sending limit per minute/hour.
            // Example: sleep(2); // Sleep for 2 seconds
        }
    }
}
