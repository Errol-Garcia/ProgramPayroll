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
        $sueldo = Sueldo::with('empleado')->get()->toArray();
        //$sueldo = Sueldo::get();
        //dd($sueldo);
        return view('configuration.employee.EmployeePayroll', ['sueldos'=>$sueldo]);
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
        'devengado'=> $devengado, 'descuento'=>$descuento, 'cedula'=>"df"]);
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

        $TotalesDevengados = $TotalBasic+$extras+$devengado->alimentacion+$devengado->vivienda+$devengado->extra+$auxilioT;
        //$TotalesDevengados = $TotalBasic+$auxilioT;
        $salud = ($TotalesDevengados-$auxilioT)*($descuento->salud/100);
        $pension = ($TotalesDevengados-$auxilioT)*($descuento->pension/100);
        $arl = ($TotalesDevengados-$auxilioT)*($descuento->parafiscal/100);

        $TotalDescuentos = $salud + $pension + $arl;
        $NetoPagar = $TotalesDevengados - $TotalDescuentos;
        //$NetoPagar = $Neto;//+$extras;

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
        'devengado'=> null, 'descuento'=>null, 'mensaje'=>"registrado"]);

        //dd($request);
    }
    public function show(Request $request, $cedula){

        $empleado = Empleado::where('cedula',$cedula);
        dd($empleado);
        //$cedula = $request->input('cedula');

    }
    public function edit(int $sueldo){
        //dd(/*$descuento, $devengado, */$sueldo);
        $descuento = Descuento::get();
        $devengado = Devengado::get();
        $sueldo = Sueldo::find($sueldo);
        $descuento_sueldo = Descuento::find($sueldo->descuento_id);
        $devengado_sueldo = Devengado::find($sueldo->devengado_id);
        //$empleado = Devengado::find($sueldo->empleado_id);
        //dd($sueldo);
        return view('configuration.employee.EmployeePayrollUpdating', 
            ['sueldo'=>$sueldo,'devengado'=> $devengado, 'descuento'=>$descuento,
            'devengado_sueldo'=> $devengado_sueldo, 'descuento_sueldo'=>$descuento_sueldo,
            ]);
    }
    
    public function update(Request $request, Sueldo $sueldo){
        $sueldo = Sueldo::find($request->id);
        $descuento = Descuento::find($request->descuento_id);
        $devengado = Devengado::find($request->devengado_id);
        $empleado = Empleado::find($sueldo->empleado_id);
        //dd($sueldo, $request, $empleado);

        $auxilioT=0;
        if($request->sueldo <= 1160000){
            $auxilioT = $devengado->transporte;
        }
        $TotalBasic = ($empleado->sueldo*$request->diasT)/30;

        $extras = ($request->vhora*$request->horasExtra) + $request->bono;

        $TotalesDevengados = $TotalBasic+$extras+$devengado->alimentacion+$devengado->vivienda+$devengado->extra+$auxilioT;
        //$TotalesDevengados = $TotalBasic+$auxilioT;
        $salud = ($TotalesDevengados-$auxilioT)*($descuento->salud/100);
        $pension = ($TotalesDevengados-$auxilioT)*($descuento->pension/100);
        $arl = ($TotalesDevengados-$auxilioT)*($descuento->parafiscal/100);

        $TotalDescuentos = $salud + $pension + $arl;
        $NetoPagar = $TotalesDevengados - $TotalDescuentos;

        $sueldo->update([
            'diasT'=> $request->diasT,
            'horasExtras'=>$request->horasExtra,
            'vhora'=>$request->vhora,
            'bono'=>$request->bono,
            'valorDevengado'=>$TotalesDevengados,
            'valorDescuento'=>$TotalDescuentos,
            'sueldoNeto'=>$NetoPagar,
            'descuento_id'=>$request->descuento_id,
            'devengado_id'=>$request->devengado_id,
        ]);
        return redirect()->route('payroll.index');
    }
    public function destroy($id){

    }
}