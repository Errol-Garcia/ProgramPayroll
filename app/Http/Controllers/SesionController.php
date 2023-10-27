<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function index(){
        $sesion = Sesion::get();
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