<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleado = Empleado::get();
        return view('configuration.employee.EmployeeList',['empleado'=> $empleado]);
    }
    
    public function create(){
        $empleado = Empleado::get();
        return view('configuration.employee.EmployeeCreate',['empleado'=> $empleado]);
    }
    public function store(Request $request){
        
        $request->validate([
            'cedula' => 'required|regex:/^([0-9]*)$/',
            'nombres' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'apellidos' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'sueldo' => 'required|float',
            'telefono' => 'required|regex:/^([0-9]*)$/',
            'direccion' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'email' => 'required|string|email|max:255|min:8',
        ]);

        Empleado::create([
            'cedula'=> $request->cedula,
            'nombres'=> $request->nombres,
            'apellidos'=> $request->apellidos,
            'sueldo'=> $request->sueldo,
            'telefono'=> $request->telefono,
            'direccion'=> $request->direccion,
            'email'=> $request->email,
        ]);
        return redirect()->route('empleado.index');
    }
    public function show(){
    }
    public function edit(Empleado $empleado){
        $empleado = Empleado::find($empleado->id);
        return view('configuration.employee.EmployeeCreate',['empleado'=> $empleado]);
    }
    public function update(Request $request, Empleado $empleado){

        $request->validate([
            'cedula' => 'required|regex:/^([0-9]*)$/',
            'nombres' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'apellidos' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'sueldo' => 'required|float',
            'telefono' => 'required|regex:/^([0-9]*)$/',
            'direccion' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'email' => 'required|string|email|max:255|min:8',
        ]);

        $empleado->update([
            'cedula'=> $request->cedula,
            'nombres'=> $request->nombres,
            'apellidos'=> $request->apellidos,
            'sueldo'=> $request->sueldo,
            'telefono'=> $request->telefono,
            'direccion'=> $request->direccion,
            'email'=> $request->email
        ]);

        return redirect()->route('empleado.index');
    }
    public function destroy(Empleado $empleado){
        
        $empleado = Empleado::find($empleado->id);
        $empleado->delete();
        return redirect()->route('empleado.index');

    }
}