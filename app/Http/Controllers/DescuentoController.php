<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function index(){
        $descuento = Descuento::get();
        //dd($descuento);
        return view('configuration.discount.ConfigurationDiscount',
            ['descuento'=> $descuento]);
    }
    public function create(){
        $descuento = Descuento::get();
        return view('configuration.discount.ConfigurationDiscountCreate',
            ['descuento'=> null]);
    }
    public function store(Request $request){
        
        $request->validate([
            'arl' => 'required|float',
            'salud' => 'required|float',
            'pension' => 'required|float',
            'parafiscal' => 'required|float',
            'fechaRegistro' => 'required|date'
        ]);

        Descuento::create([
            'arl' => $request->arl,
            'salud' => $request->salud,
            'pension' => $request->pension,
            'parafiscal' => $request->parafiscal,
            'fechaRegistro' => $request->fechaRegistro,
        ]);
        return redirect()->route('descuento.index');
    }
    public function show(){
    }
    public function edit(Descuento $descuento){
        $descuento = Descuento::find($descuento->id);
        return view('configuration.discount.ConfigurationDiscountUpdating',
            ['descuento'=> $descuento]);
    }
    public function update(Request $request, Descuento $descuento){

        $request->validate([
            'arl' => 'required|float',
            'salud' => 'required|float',
            'pension' => 'required|float',
            'parafiscal' => 'required|float',
            'fechaRegistro' => 'required|date'
        ]);

        $descuento->update([
            'arl' => $request->arl,
            'salud' => $request->salud,
            'pension' => $request->pension,
            'parafiscal' => $request->parafiscal,
            'fechaRegistro' => $request->fechaRegistro,
        ]);

        return redirect()->route('descuento.index');
    }
    public function destroy(Descuento $descuento){
        
        $descuento = Descuento::find($descuento->id);
        $descuento->delete();
        return redirect()->route('descuento.index');

    }
}