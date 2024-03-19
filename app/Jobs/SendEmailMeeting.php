<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailForMeetingQueue;
use Illuminate\Support\Facades\Log;


class SendEmailMeeting implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $proffesor;
    protected $email;
    protected $fname;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $proffesor, $fname)
    {
        $this->proffesor = $proffesor;
        $this->email = $email;
        $this->fname = $fname;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            Log::info('Before Mailable Data log');
            $email = new EmailForMeetingQueue($this->proffesor, $this->fname);
            Log::info('Mailable Data:', ['fname' => $this->fname, 'proffesor' => $this->proffesor]);
            Mail::to($this->email)->send($email);
            Log::info('After Email sent successfully log');
            Log::info('Email sent successfully.', ['email' => $this->email, 'professor' => $this->proffesor, 'fname' => $this->fname]);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage(), ['email' => $this->email, 'professor' => $this->proffesor, 'fname' => $this->fname]);
        }
    }
}
