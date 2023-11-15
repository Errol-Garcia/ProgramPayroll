<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        $department = Departamento::get();
        return view('configuration.department.DepartmentList',
            ['department'=> $department]);
    }
    public function create(){
        $department = Departamento::get();
        return view('configuration.department.DepartmentCreate',
        ['department'=> null]);
    }
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
        ]);

        Departamento::create([
            'nombre'=> $request->nombre
        ]);

        return redirect()->route('department.index');
    }

    public function show(){
    }
    public function edit(Departamento $department){
        
        $department = Departamento::find($department->id);
        return view('configuration.department.DepartmentUpdating',
            ['department'=> $department]);
    }
    public function update(Request $request, Departamento $department){
        $request->validate([
            'nombre' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
        ]);

        $department->update([
            'nombre'=> $request->nombre
        ]);
        
        return redirect()->route('department.index');
    }
    public function destroy(Departamento $department){
        
        $department = Departamento::find($department->id);
        $department->delete();
        return redirect()->route('department.index');

    }
}