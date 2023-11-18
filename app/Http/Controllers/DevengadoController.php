<?php

namespace App\Http\Controllers;

use App\Models\Devengado;
use Illuminate\Http\Request;

class DevengadoController extends Controller
{
    public function index(){
        $accrued = Devengado::get();
        //dd($devengado);
        return view('configuration.accrued.ConfigurationAccrued',
            ['accrued'=> $accrued]);
    }
    public function create(){
        $devengado = Devengado::get();
        return view('configuration.accrued.ConfigurationAccruedCreate',
            ['accrued'=> null]);
    }
    public function store(Request $request){
        //dd($request);
        $request->validate([
            'alimentacion' => 'required|decimal:0,5',
            'vivienda' => 'required|decimal:0,5',
            'transporte' => 'required|decimal:0,5',
            'extra' => 'required|decimal:0,5',
            'fechaRegistro' => 'required|date'
        ]);
        Devengado::create([
            'alimentacion'=> $request->alimentacion,
            'vivienda'=> $request->vivienda,
            'transporte'=> $request->transporte,
            'extra'=> $request->extra,
            'fechaRegistro'=> $request->fechaRegistro
        ]);
        return redirect()->route('accrued.index');
    }
    public function show(){
    }
    public function edit(Devengado $accrued){
        //dd($accrued);
        $accrued = Devengado::find($accrued->id);
        //dd($accrued);

        return view('configuration.accrued.ConfigurationAccruedUpdating',
            ['accrued'=> $accrued]);
    }
    public function update(Request $request, Devengado $accrued){
        
        $request->validate([
            'alimentacion' => 'required|decimal:0,5',
            'vivienda' => 'required|decimal:0,5',
            'transporte' => 'required|decimal:0,5',
            'extra' => 'required|decimal:0,5',
            'fechaRegistro' => 'required|date'
        ]);
        

        $accrued->update([
            'alimentacion'=> $request->alimentacion,
            'vivienda'=> $request->vivienda,
            'transporte'=> $request->transporte,
            'extra'=> $request->extra,
            'fechaRegistro'=> $request->fechaRegistro
        ]);

        return redirect()->route('accrued.index');
    }

    public function destroy(Devengado $accrued){
        
        $accrued = Devengado::find($accrued->id);
        $accrued->delete();
        return redirect()->route('accrued.index');

    }
}