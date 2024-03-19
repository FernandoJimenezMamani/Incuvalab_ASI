<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailFormDoneQueue;

class SendEmailFormDone implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $form;
    protected $email;
    protected $teamName;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $teamName, $form)
    {
        $this->teamName = $teamName;
        $this->email = $email;
        $this->form = $form;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new EmailFormDoneQueue($this->teamName, $this->form);
        Mail::to($this->email)->send($email);
    }
}
