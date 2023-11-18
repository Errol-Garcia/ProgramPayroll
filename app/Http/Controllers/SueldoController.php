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

        //dd($devengado);

        return view('configuration.employee.EmployeePayrollPartial',
        ['employee' => $empleado, 'sueldo'=>$sueldo,
        'devengado'=> $devengado, 'descuento'=>$descuento]);
    }
    public function store(Request $request){
        $descuento = Descuento::find($request->descuento_id);
        $devengado = Devengado::find($request->devengado_id);

        $auxilioT=0;
        if($request->sueldo <= 1160000){
            $auxilioT = $devengado->transporte;
        }
        $TotalBasic = ($request->sueldo*$request->diasT)/30;

        $extras = ($request->vhora*$request->horasExtra) + $request->bono;

        $TotalesDevengados = $TotalBasic+$auxilioT;
        $salud = ($TotalesDevengados-$auxilioT)*($descuento->salud/100);
        $pension = ($TotalesDevengados-$auxilioT)*($descuento->pension/100);
        $arl = ($TotalesDevengados-$auxilioT)*($descuento->parafiscal/100);

        $TotalDescuentos = $salud + $pension + $arl;
        $Neto = $TotalesDevengados - $TotalDescuentos;
        $NetoPagar = $Neto+$extras;

        Sueldo::create([
            'diasT'=> $request->diasT,
            'horasExtras'=>$request->horasExtra,
            'vhora'=>$request->vhora,
            'bono'=>$request->bono,
            'valorDevengado'=>$TotalesDevengados,
            'valorDescuento'=>$TotalDescuentos,
            'sueldoNeto'=>$NetoPagar,
            'empleado_id'=>$request->empleado_id,
            'descuento_id'=>$request->descuento_id,
            'devengado_id'=>$request->devengado_id,
        ]);
        return view('configuration.employee.EmployeePayrollPartial',
        ['employee' => null, 'sueldo'=>null,
        'devengado'=> null, 'descuento'=>null]);

        //dd($request);
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