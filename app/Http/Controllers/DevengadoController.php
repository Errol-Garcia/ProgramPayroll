<?php

namespace App\Http\Controllers;

use App\Models\Devengado;
use Illuminate\Http\Request;

class DevengadoController extends Controller
{
    public function index(){
        $devengado = Devengado::get();
        //dd($devengado);
        return view('configuration.accrued.ConfigurationAccrued',
            ['devengado'=> $devengado]);
    }
    public function create(){
        $devengado = Devengado::get();
        return view('configuration.accrued.ConfigurationAccruedCreate',
            ['devengado'=> null]);
    }
    public function store(Request $request){
        
        $request->validate([
            'alimentacion' => 'required|float',
            'vivienda' => 'required|float',
            'transporte' => 'required|float',
            'extra' => 'required|float',
            'fechaRegistro' => 'required|date'
        ]);

        Devengado::create([
            'alimentacion'=> $request->alimentacion,
            'vivienda'=> $request->vivienda,
            'transporte'=> $request->transporte,
            'extra'=> $request->extra,
            'fechaRegistro'=> $request->fechaRegistro
        ]);
        return redirect()->route('devengado.index');
    }
    public function show(){
    }
    public function edit(Devengado $devengado){
        $devengado = Devengado::find($devengado->id);
        return view('configuration.accrued.ConfigurationAccruedUpdating',
            ['devengado'=> $devengado]);
    }
    public function update(Request $request, Devengado $devengado){

        $request->validate([
            'alimentacion' => 'required|float',
            'vivienda' => 'required|float',
            'transporte' => 'required|float',
            'extra' => 'required|float',
            'fechaRegistro' => 'required|date'
        ]);

        $devengado->update([
            'alimentacion'=> $request->alimentacion,
            'vivienda'=> $request->vivienda,
            'transporte'=> $request->transporte,
            'extra'=> $request->extra,
            'fechaRegistro'=> $request->fechaRegistro
        ]);

        return redirect()->route('devengado.index');
    }
    public function destroy(Devengado $devengado){
        
        $devengado = Devengado::find($devengado->id);
        $devengado->delete();
        return redirect()->route('devengado.index');

    }
}