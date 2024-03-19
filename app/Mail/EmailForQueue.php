<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;


class EmailForQueue extends Mailable
{
    use Queueable, SerializesModels;

    protected $pass;
    protected $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pass, $name)
    {
        $this->pass = $pass;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('incuvalabunivalle@hotmail.com', 'Incuvalab')
            ->subject('Contraseña cuenta Incuvalab')
            ->view('emails.psw')
            ->with([
                'pass' => $this->pass,
                'name' => $this->name
        ]);
    }
}
