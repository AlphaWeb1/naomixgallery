<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailNotifications extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var $mail_data
     */
    protected $mail_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_data)
    {
        $this->mail_data = $mail_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from((!empty($this->mail_data->send_from) ? $this->mail_data->send_from->email : config("mail.from.address")), config('app.name'))
        ->subject(!empty($this->mail_data->message->title) ? $this->mail_data->message->title : config("mail.from.name"))
        ->view('mails.general-mail')
        ->with(['mail_data' => $this->mail_data]);
    }
}
