<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function enviarFormularioContacto(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'fecha_nacimiento' => 'required|date',
            'mensaje' => 'required|string',
            'imagen' => 'required|string|max:255',
        ]);

        $contactMessage = new ContactMessage();
        $contactMessage->nombre = $request->nombre;
        $contactMessage->email = $request->email;
        $contactMessage->fecha_nacimiento = $request->fecha_nacimiento;
        $contactMessage->mensaje = $request->mensaje;
        $contactMessage->imagen = $request->imagen;
        $contactMessage->save();

        return response()->json(['mensaje' => 'Formulario de contacto enviado correctamente'], 201);
    }
}
