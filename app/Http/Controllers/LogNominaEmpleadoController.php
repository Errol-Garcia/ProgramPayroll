<?php

namespace App\Http\Controllers;

use App\Models\LogNominaEmpleado;
use Illuminate\Http\Request;

class LogNominaEmpleadoController extends Controller
{
    public function index(){
        $logNominaEmpleado = LogNominaEmpleado::get();
        return view();
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