<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use App\Models\Devengado;
use App\Models\Empleado;
use App\Models\Sueldo;
use Illuminate\Http\Request;

class SueldoController extends Controller
{
    public function index(){
        $Sueldo = Sueldo::get();
        return view('configuration.employee.EmployeePayroll');
    }
    public function create(Request $request){
        //dd($request);
        $descuento = Descuento::get();
        $devengado = Devengado::get();
        $sueldo = '';
        $empleado = Empleado::where('cedula',$request->cedula)->first();
        if($empleado != null){
            $sueldo = Sueldo::where('empleado_id', $empleado->id)->first();
        }
        
        //dd($sueldo);
        
        return view('configuration.employee.EmployeePayrollPartial',
        ['employee' => $empleado, 'sueldo'=>$sueldo,
        'devengado'=> $devengado, 'descuento'=>$descuento]);
    }
    public function store(Request $request){
        
    }
    public function show(Request $request, $cedula){
        
        $empleado = Empleado::where('cedula',$cedula);
        dd($empleado);
        //$cedula = $request->input('cedula');
        
    }
    public function edit($id){
    }
    public function update(Request $request){
    }
    public function destroy($id){
        
    }
}