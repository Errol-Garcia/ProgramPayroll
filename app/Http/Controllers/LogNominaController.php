<?php

namespace App\Http\Controllers;

use App\Models\LogNomina;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogNominaController extends Controller
{
    public function index(){
        //$log = LogNomina::get();
        $log = DB::select('SELECT * FROM "logNominas" as l inner join empleados as e on l.empleado_id=e.id');
        //dd($log);
        return view('configuration.logPayroll.logPayrollList', ['sueldos'=>$log]);
    }
    public function create(){
    }
    public function store(Request $request){
        $request = json_decode($request->input('sueldos'));
        //dd($request);
        foreach($request as $sueldo){
            DB::table('logNominas')->insert([
                'diasT'=> $sueldo->diasT,
                'horasExtras'=>$sueldo->horasExtras,
                'vhora'=>$sueldo->vhora,
                'bono'=>$sueldo->bono,
                'valorDevengado'=>$sueldo->valorDevengado,
                'valorDescuento'=>$sueldo->valorDescuento,
                'sueldoNeto'=>$sueldo->sueldoNeto,
                'fechaRegistro'=>(new DateTime())->format('Y-m-d'),
                'empleado_id'=>$sueldo->empleado_id

            ]);
        }
        return redirect()->route('logNomina.index');
    }
    public function show(){
    }
    public function edit($id){
    }
    public function update(Request $request){
    }
    public function destroy($id){
        
    }
    public function almacenar($sueldos){
        dd($sueldos);
    }
}