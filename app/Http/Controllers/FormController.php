<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function sendSupportForm(Request $request)
    {

        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|email|max:255',
            'Mensaje' => 'required|string',
        ]);

        // $formData = $request->except('_token');
        // $formType = 'Soporte';

        // Mail::to('EcoRadar.upq@gmail.com')->send(new FormSubmitted($formData, $formType));
        Mail::to('EcoRadar.upq@gmail.com')->send(new FormSubmitted($validatedData, 'Soporte'));

        return back()->with('success', 'Click para cerrar');
    }

    public function sendRecycleCenterForm(Request $request)
    {
        
        $validatedData = $request->validate([
            'Centro' => 'required|string|max:255',
            'Materiales' => 'required_without:Otros_Materiales|array|min:1',
            'Materiales.*' => 'string|in:Unicel,Colillas de cigarro,Escombro,Pilas o baterías,Residuos Electrónicos,otros',
            'Otros_Materiales' => 'required_if:Materiales.otros,otros|string|nullable',
            'URL_GoogleMaps' => 'required|url',
        ]);

        // $formData = $request->except('_token');
        // $formType = 'Registro de Centro de Reciclaje';

        Mail::to('EcoRadar.upq@gmail.com')->send(new FormSubmitted($validatedData, 'Registro de Centro de Reciclaje'));
        // Mail::to('EcoRadar.upq@gmail.com')->send(new FormSubmitted($formData, $formType));

        return back()->with('success', 'Click para cerrar');
        
    }
}
