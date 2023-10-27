<?php

namespace App\Http\Controllers;

use App\Models\NominaEmpleado;
use Illuminate\Http\Request;

class NominaEmpleadoController extends Controller
{
    public function index(){
        $nominaEmpleado = NominaEmpleado::get();
        return view('');
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