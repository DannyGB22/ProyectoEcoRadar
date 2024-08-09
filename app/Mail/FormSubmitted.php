<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $formType;

    public function __construct($formData, $formType)
    {
        $this->formData = $formData;
        $this->formType = $formType;
    }

    public function build()
    {
        return $this->view('emails.form')
                    ->subject('Formulario Enviado - EcoRadar')
                    ->with([
                        'formData' => $this->formData,
                        'formType' => $this->formType,
                    ]);
    }
}
