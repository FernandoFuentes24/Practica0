<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'visit_date' => 'required|date',
            'rating' => 'required|integer|min:1|max:5',
            'comments' => 'required|string|max:1000',
        ]);

        // Crear un nuevo cliente usando los datos validados
        Client::create($validatedData);

        // Redirigir o devolver una respuesta
        return redirect()->route('contact')->with('success', '¡Contacto guardado exitosamente!');
    }
    
}
