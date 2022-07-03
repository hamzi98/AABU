<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeleteGroup extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
    public function __construct($info)
    {
        $this->info=$info;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('اشــعار')->view('email.DeleteGroup');
    }
}
