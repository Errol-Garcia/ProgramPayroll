<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use App\Models\Sesion;
use App\Models\User;

class RegisterdUserSessionController extends Controller
{
    public function create(){
        
        $roles = Rol::get();
        return view("auth.Register", ['roles'=>$roles]);
    }
    public function store(Request $request){

        /*$request->validate([
            'name' => 'required|string|max:255|min:8',
            'email' => 'required|string|email|max:255|min:8|unique:users',
            'password' => ['required','confirmed',Password::default()]
        ]);*/
        //dd($request);
        User::create([
            'nombre' => $request->name,
            'usuario' => $request->usuario,
            'password'=> bcrypt($request->password),
            'cedula'=> $request->cedula,
            'rol_id' => $request->rol_id,
        ]);

        return redirect()->route('login');
    }
}