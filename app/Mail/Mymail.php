<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class Mymail extends Mailable
{
    use Queueable, SerializesModels;
    public $demo;
    public function __construct($demo)
    {
        $this->demo = $demo;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('190103181@stu.sdu.edu.kz')
                    ->view('mails.practice');
    }
}