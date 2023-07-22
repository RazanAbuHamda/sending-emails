<?php
namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Emails_List;
use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    function index()
    {
        return view('index');
    }

    function send(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'subject' => 'required'
        ]);

        // ...
        $emailMessage = $request->input('message');
        $emailSubject = $request->input('subject');
        $email = new Email();
        $email->message =$emailMessage;
        $email->subject =$emailSubject;
        $email->status = 0;
        $emailSender = env('MAIL_FROM_ADDRESS');

        $emailsList = Emails_List::pluck('email')->toArray();

        $batchSize = 200; // Number of emails to send each day
        $numDays = ceil(count($emailsList) / $batchSize);

        for ($day = 1; $day <= $numDays; $day++) {
            $startIdx = ($day - 1) * $batchSize;
            $endIdx = min($day * $batchSize, count($emailsList));
            $recipientsBatch = array_slice($emailsList, $startIdx, $endIdx - $startIdx);

            dispatch(new SendEmailJob($emailMessage, $emailSubject, $recipientsBatch))
                ->delay(now()->addDays($day));


            // Check if it's the last loop iteration
            if ($day === $numDays) {
                $email->status = 1; // Update the status to 1
                $email->save(); // Save the updated status
            }else{
                $email->status = 0;
                $email->save();
            }

        }

        return "Emails scheduled to be sent!";
    }

    // ...
}

?>


