<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Http\Controllers\Auth\AuthenticatedSessionController as JetstreamAuthenticatedSessionController;

class LoginController extends JetstreamAuthenticatedSessionController
{
    // Surcharge de la méthode authenticate
    protected function authenticate(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string',
            'code_inscription' => 'required|string',
        ]);

        $credentials = $request->only('matricule', 'code_inscription');

        if (Auth::attempt($credentials, $request->remember)) {
            return $this->afterAuthenticated($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
}
