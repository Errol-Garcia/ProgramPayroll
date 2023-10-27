<?php

namespace App\Http\Controllers;

use App\Models\LogNomina;
use Illuminate\Http\Request;

class LogNominaController extends Controller
{
    public function index(){
        $logNomina = LogNomina::get();
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