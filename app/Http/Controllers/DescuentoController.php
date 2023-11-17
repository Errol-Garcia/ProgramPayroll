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
            ['discount'=> null]);
    }
    public function store(Request $request){
        
        $request->validate([
            'arl' => 'required|decimal:0,5',
            'salud' => 'required|decimal:0,5',
            'pension' => 'required|decimal:0,5',
            'parafiscal' => 'required|decimal:0,5',
            'fechaRegistro' => 'required|date'
        ]);

        Descuento::create([
            'arl' => $request->arl,
            'salud' => $request->salud,
            'pension' => $request->pension,
            'parafiscal' => $request->parafiscal,
            'fechaRegistro' => $request->fechaRegistro,
        ]);
        return redirect()->route('discount.index');
    }
    public function show(){
    }
    public function edit(Descuento $discount){
        $discount = Descuento::find($discount->id);
        return view('configuration.discount.ConfigurationDiscountUpdating',['discount'=> $discount]);
    }
    public function update(Request $request, Descuento $discount){

        $request->validate([
            'arl' => 'required|decimal:0,5',
            'salud' => 'required|decimal:0,5',
            'pension' => 'required|decimal:0,5',
            'parafiscal' => 'required|decimal:0,5',
            'fechaRegistro' => 'required|date'
        ]);

        $discount->update([
            'arl' => $request->arl,
            'salud' => $request->salud,
            'pension' => $request->pension,
            'parafiscal' => $request->parafiscal,
            'fechaRegistro' => $request->fechaRegistro,
        ]);

        return redirect()->route('discount.index');
    }
    
    public function destroy(Descuento $discount){
        
        $discount = Descuento::find($discount->id);
        $discount->delete();
        return redirect()->route('discount.index');

    }
}