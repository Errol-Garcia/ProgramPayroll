<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        $post = Cargo::get();
        return view('configuration.post.PostList',
        ['post' => $post]);
    }
    public function create(){
        $post = Cargo::get();
        return view('configuration.post.PostCreate',
        ['post'=> null]);

    }
    public function store(Request $request){

        $request->validate([
            'nombre' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',
        ]);

        Cargo::create([
            'nombre'=> $request->nombre
        ]);

        return redirect()->route('post.index');

    }
    public function show(){
    }
    public function edit(Cargo $post){
        $post = Cargo::find($post->id);
        return view('configuration.post.PostUpdating',
            ['post'=> $post]);
    }
    public function update(Request $request, Cargo $post){
        $request->validate([
            'nombre' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,100',]);

            $post->update([
                'nombre'=> $request->nombre
            ]);

            return redirect()->route('post.index');
    }
    public function destroy(Cargo $post){

        $post = Cargo::find($post->id);
        $post->delete();
        return redirect()->route('post.index');

    }

}
