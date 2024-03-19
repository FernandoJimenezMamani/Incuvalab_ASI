<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailFormDoneQueue extends Mailable
{
    use Queueable, SerializesModels;
    protected $teamName;
    protected $form;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($teamName, $form)
    {
        $this->teamName = $teamName;
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
            ->subject('Formulario Terminado')
            ->view('emails.FormDone')
            ->with([
                'teamName' => $this->teamName,
                'form' => $this->form
        ]);
    }
}
