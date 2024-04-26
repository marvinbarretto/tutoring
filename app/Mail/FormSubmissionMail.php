<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->view('emails.submission')
                    ->with([
                        'name' => $this->formData['name'],
                        'email' => $this->formData['email'],
                        'category' => $this->formData['category']
                    ]);
    }
}
