<?php

namespace App\Mail;


use App\Models\Api;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MensajeContacto extends Mailable
{
    use Queueable, SerializesModels;
    public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Api $mensaje)
    {
        $this-> mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail');
    }
}
