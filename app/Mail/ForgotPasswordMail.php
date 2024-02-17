<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $newPassword;

    public function __construct($email, $newPassword)
    {
        $this->to($email);
        $this->newPassword = $newPassword;
    }

    public function build()
    {
        return $this->markdown('emails.forgot_password')
                    ->subject(config('app.name').' - Forgot Password');
    }
}
