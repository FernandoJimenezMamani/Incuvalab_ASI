<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class EmailApprovedQueue extends Mailable
{
    use Queueable, SerializesModels;
    protected $teacherName;
    protected $form;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($teacherName, $form)
    {
        $this->teacherName = $teacherName;
        $this->form = $form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('incuvalabunivalle@hotmail.com', 'Incuvalab')
            ->subject('Formulario Aprovado')
            ->view('emails.FormApproved')
            ->with([
                'teacherName' => $this->teacherName,
                'form' => $this->form
        ]);
    }
}
