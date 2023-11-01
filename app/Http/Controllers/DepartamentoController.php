<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        $departamento = Departamento::get();
        return view('configuration.department.DepartmentList',
            ['departamento'=> $departamento]);
    }
    public function create(){
        $departamento = Departamento::get();
        return view('configuration.department.DepartmentCreate',
        ['departamento'=> null]);
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
        ]);

        Departamento::create([
            'name'=> $request->name
        ]);

        return redirect()->route('departamento.index');
    }

    public function show(){
    }
    public function edit(Departamento $departamento){
        dd($departamento);
        $departamento = Departamento::find($departamento->id);
        return view('configuration.department.DepartmentUpdating',
            ['departamento'=> $departamento]);
    }
    public function update(Request $request, Departamento $departamento){
        $request->validate([
            'name' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
        ]);

        $departamento->update([
            'name'=> $request->name
        ]);
        
        return redirect()->route('departamento.index');
    }
    public function destroy(Departamento $departamento){
        
        $departamento = Departamento::find($departamento->id);
        $departamento->delete();
        return redirect()->route('departamento.index');

    }
}