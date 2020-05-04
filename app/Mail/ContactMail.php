<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->email =  $request;
        // dd($this->email);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $global = DB::table('globals')->first();
        return $this->markdown('email.contactMail')
                    ->from($global->contact_email, 'CDA Interview')
                    ->to($this->email->email, $this->email->name)
                    ->subject('CDA Interview Response Mail')
                    ->replyTo($global->contact_email, $this->email->name);
    }
}
