<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;
    public $richiesta;
    /**
     * Create a new message instance.
     */
    public function __construct($richiesta)
    {
        //
        $this->richiesta=$richiesta;
       
    }

    // public function build() {
    //     return $this->from('presto.it@reply.com')->view('mailTo.revisorToBe');
    // }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    { 
        return new Envelope(
        from: new Address('presto.it@noreply.com', 'Staff Presto'),
        subject: 'Become Revisor',
        );
    }

    // /**
    //  * Get the message content definition.
    //  */
    public function content(): Content
    {
        return new Content(
            view: 'mailTo.revisorToBe'
        );
    }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, Illuminate\Mail\Mailables\Attachment>
    //  */
   
    public function attachments(): array
    {
        return [];
    }
}
