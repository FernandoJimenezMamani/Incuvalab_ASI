<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailApprovedQueue;

class SendEmailApproved implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $teacherName;
    protected $email;
    protected $form;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email, $teacherName, $form)
    {
        $this->teacherName = $teacherName;
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
        $email = new EmailApprovedQueue($this->teacherName, $this->form);
        Mail::to($this->email)->send($email);
    }
}
