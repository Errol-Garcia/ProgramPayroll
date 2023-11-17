<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index(){
        $empleado = Empleado::get();
        $cargo = Cargo::get();
        $departamento = Departamento::get();
        return view('configuration.employee.EmployeeList',['empleado'=> $empleado, 'cargo'=>$cargo, 'departamento'=>$departamento]);
    }
    
    public function create(){
        $empleado = Empleado::get();
        $cargo = Cargo::get();
        $departamento = Departamento::get();
        return view('configuration.employee.EmployeeCreate',['employee'=> null, 'cargo'=>$cargo, 'departamento'=>$departamento]);
    }
    public function store(Request $request, Empleado $empleado, Cargo $cargo, Departamento $departamento){
        
        $request->validate([
            'cedula' => 'required|regex:/^([0-9]*)$/',
            'nombres' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'apellidos' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'sueldo' => 'required|decimal:0,5',
            'telefono' => 'required|regex:/^([0-9]*)$/',
            'direccion' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'email' => 'required|string|email|max:255|min:8',
            'departamento_id' => 'required|integer',
            'cargo_id' => 'required|integer'
        ]);

        //dd($request);
        Empleado::create([
            'cedula'=> $request->cedula,
            'nombres'=> $request->nombres,
            'apellidos'=> $request->apellidos,
            'sueldo'=> $request->sueldo,
            'telefono'=> $request->telefono,
            'direccion'=> $request->direccion,
            'email'=> $request->email,
            'departamento_id'=> $request->departamento_id,
            'cargo_id'=> $request->cargo_id,
        ]);
        return redirect()->route('employee.index');
    }
    public function show(){
    }
    public function edit(Empleado $employee){
        $employee = Empleado::find($employee->id);
        $cargos = Cargo::get();
        $departamentos = Departamento::get();
        return view('configuration.employee.EmployeeUpdating',
        ['employee'=> $employee, 'cargos'=>$cargos, 'departamentos'=>$departamentos]);
    }
    public function update(Request $request, Empleado $empleado){

        $request->validate([
            'cedula' => 'required|regex:/^([0-9]*)$/',
            'nombres' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'apellidos' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'sueldo' => 'required|decimal:0,5',
            'telefono' => 'required|regex:/^([0-9]*)$/',
            'direccion' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
            'email' => 'required|string|email|max:255|min:8',
            'departamento_id' => 'required|integer',
            'cargo_id' => 'required|integer'
        ]);

        $empleado->update([
            'cedula'=> $request->cedula,
            'nombres'=> $request->nombres,
            'apellidos'=> $request->apellidos,
            'sueldo'=> $request->sueldo,
            'telefono'=> $request->telefono,
            'direccion'=> $request->direccion,
            'email'=> $request->email,
            'departamento_id'=> $request->departamento_id,
            'cargo_id'=> $request->cargo_id,
        ]);

        return redirect()->route('empleado.index');
    }
    public function destroy(Empleado $empleado){
        
        $empleado = Empleado::find($empleado->id);
        $empleado->delete();
        return redirect()->route('empleado.index');

    }
}