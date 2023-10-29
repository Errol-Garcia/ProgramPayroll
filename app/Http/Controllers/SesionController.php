<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function index(){
        $sesion = Sesion::get();
        return view('');
    }
    
    public function create(){
        $sesion = Sesion::get();
        return view('',['sesion'=> $sesion]);
    }
    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'usuario' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'password' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'cedula' => 'required|regex:/^([0-9]*)$/|between:8,11',
        ]);

        Sesion::create([
            'nombre'=> $request->nombre,
            'usuario'=> $request->usuario,
            'password'=> $request->password,
            'cedula'=> $request->cedula,
            'rol_id'=> $request->rol_id,
        ]);
        return redirect()->route('empleado.index');
    }
    public function show(){
    }
    public function edit(Sesion $sesion){
        $sesion = Sesion::find($sesion->id);
        return view('',['sesion'=> $sesion]);
    }
    public function update(Request $request, Sesion $sesion){
        $request->validate([
            'nombre' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'usuario' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'password' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'cedula' => 'required|regex:/^([0-9]*)$/|between:8,11',
        ]);

        $sesion->update([
            'nombre'=> $request->nombre,
            'usuario'=> $request->usuario,
            'password'=> $request->password,
            'cedula'=> $request->cedula,
            'rol_id'=> $request->rol_id,
        ]);

        return redirect()->route('sesion.index');
    }
    public function destroy(Sesion $sesion){
        
        $sesion = Sesion::find($sesion->id);
        $sesion->delete();
        return redirect()->route('sesion.index');

    }
}