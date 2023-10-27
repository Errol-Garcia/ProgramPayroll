<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function index(){
        $descuento = Descuento::get();
        return view('configuration.discount.ConfigurationDiscount',['departamento'=> $descuento]);
    }
    public function create(){
    }
    public function store(Request $request){
        
    }
    public function show(){
    }
    public function edit($id){
    }
    public function update(Request $request){
    }
    public function destroy($id){
        
    }
}