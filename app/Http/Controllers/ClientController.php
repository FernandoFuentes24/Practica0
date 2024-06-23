<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function store(ClientRequest $request):RedirectResponse
    {
        Client::create($request->all()); // Save the data in the database
        return redirect()->route('contact')->with('success', '¡Se envio correctamente!');
        
    }
    
}
