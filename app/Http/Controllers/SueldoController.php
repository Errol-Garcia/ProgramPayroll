<?php

namespace App\Http\Controllers;

use App\Models\Sueldo;
use Illuminate\Http\Request;

class SueldoController extends Controller
{
    public function index(){
        $Sueldo = Sueldo::get();
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