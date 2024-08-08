<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    //
    public function index(){
        $departamentos = Departamento::all();
        return view('departamento.index', compact('departamentos'));
    }

    public function create(){
        $departamento = Departamento::all();
        return view('departamento.create', compact('departamento'));
    }
    public function store(Request $request){

        $departamento = new Departamento();
        $departamento->nombre = $request->input('nombre');
        $departamento->save();

        return redirect()->route('departamento.index', $departamento->id);

    }
    public function show($id){
        $departamento = Departamento::findOrFail($id);
        return view('departamento.show', compact('departamento'));
    }

    public function edit($id){

        $departamento = Departamento::findOrFail($id);
        return view('departamento.edit', compact('departamento'));
    }
    public function update(Request $request, $id){

        $departamento = Departamento::findOrFail($id);
        $departamento->nombre = $request->input('nombre');;
        $departamento->save();

        return redirect()->route('departamento.index');
    }
    public function destroy($id){
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('departamento.index');
    }
}
