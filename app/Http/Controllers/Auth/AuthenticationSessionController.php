<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticationSessionController extends Controller
{
    public function create(){
        return view("auth.Login");
    }
    public function store(Request $request){
        $credentials = $request->validate([
            'usuario' => 'required|string|max:255|min:8',
            'password' => 'required|string'
        ]);

        //Incorrecto, genera excepción y retorna al formulario de login
        if(!Auth::attempt($credentials)){
            throw ValidationException::withMessages(
                [
                    'usuario' => 'Autenticación incorrecta'
                ]
            );
        }

        //crear el archivo de la sesión
        $request->session()->regenerate();

        return redirect()->route('home');
    }

    public function destroy(Request $request) {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}