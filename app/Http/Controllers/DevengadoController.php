<?php

namespace App\Http\Controllers;

use App\Models\Devengado;
use Illuminate\Http\Request;

class DevengadoController extends Controller
{
    public function index(){
        $devengado = Devengado::get();
        return view('configuration.accrued.ConfigurationAccrued',['devengado'=> $devengado]);
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