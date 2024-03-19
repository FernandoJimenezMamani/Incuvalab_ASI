<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailForMeetingQueue extends Mailable
{
    use Queueable, SerializesModels;
    protected $proffesor;
    protected $fname;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($proffesor, $fname)
    {
        $this->proffesor = $proffesor;
        $this->fname = $fname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('incuvalabunivalle@hotmail.com', 'Incuvalab')
            ->subject('Nueva Reunion Agendada')
            ->view('emails.Meeting', [
                'fname' => $this->fname,
                'proffesor' => $this->proffesor
            ]);
    }


}
