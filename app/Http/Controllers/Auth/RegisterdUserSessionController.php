<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use App\Models\Sesion;

class RegisterdUserSessionController extends Controller
{
    public function create(){
        return view("auth.Register");
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|string|max:255|min:8',
            'email' => 'required|string|email|max:255|min:8|unique:users',
            'password' => ['required','confirmed',Password::default()]
        ]);

        Sesion::create([
            'nombre' => $request->name,
            'usuario' => $request->email,
            'password'=> bcrypt($request->password),
            'cedula'=> $request->deula,
            'rol_id' => $request->rol_id,
        ]);

        return redirect()->route('login');
    }
}