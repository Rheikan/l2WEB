<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mailing extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($token,$cuenta)
    {
        $this->token = $token;
        $this->cuenta = $cuenta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->view('emails')
        ->subject("Aviso del Servidor")
        ->with([
            "token" => $this->token,
            "cuenta" => $this->cuenta,
        ]);
    }
}
