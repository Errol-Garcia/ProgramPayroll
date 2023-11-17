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
        
        /*$credentials = $request->validate([
            'usuario' => 'required|regex:/^([A-Za-zÑñ0-9\s\-]*)$/|between:1,15',
            'password' =>  'required|regex:/^([A-Za-zÑñ0-9\s\-]*)$/|between:1,15'
        ]);*/
        dd($request);
        //Incorrecto, genera excepción y retorna al formulario de login
        if(!Auth::attempt($request)){
            throw ValidationException::withMessages(
                [
                    'mensaje' => 'Autenticación incorrecta'
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