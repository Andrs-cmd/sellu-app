<?php

namespace App\Mail;

use App\Models\Tramite;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EstadoTramiteMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Tramite $tramite,
        public string $estadoAnterior
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Actualización de tu trámite — ' . ($this->tramite->nombre_empresa ?? 'Sell·U'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.estado-tramite',
        );
    }
}