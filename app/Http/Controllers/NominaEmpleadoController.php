<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\NominaEmpleado;
use Illuminate\Http\Request;

class NominaEmpleadoController extends Controller
{
    public function index(){
        //$nominaEmpleado = NominaEmpleado::get();
        $empleado = Empleado::get();
        return view('configuration.employee.EmployeePayrollPartial',['empleado'=>$empleado]);
    }
    public function create(Request $request){
        $employee = Empleado::where('cedula',$request->cedula)->first();
        //dd($employee);
        $sueldo = NominaEmpleado::where('empleado_id',$employee->id)->first();
        dd($sueldo);
        //$nominaEmpleado = NominaEmpleado::find($empleado->nomina);
        return view('configuration.employee.EmployeePayrollPartial', ['employee' =>$employee]);
    }
    public function store(Request $request){
        
    }
    public function show(){
        return view('configuration.employee.EmployeePayrollPartial');
    }
    public function edit($id){
    }
    public function update(Request $request){
    }
    public function destroy($id){
        
    }
}