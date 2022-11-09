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
        $departamentos = Departamento::all();
        return view('departamento.create', compact('departamentos'));
        return view('departamento.create');
    }
    public function store(Request $request){
        $departamentos = new Departamento();
        $departamentos->nombre_depa = $request->input('nombre');
        $departamentos->save();

        return redirect()->route('departamento.index', $departamentos->id);

    }
    public function show($id){
        $departamentos = Departamento::findOrFail($id);
        return view('departatamento.show', compact('departamentos'));
    }

    public function edit($id){

        $departamento = Departamento::findOrFail($id);
        return view('departamento.edit');
    }
    public function update(Request $request, $id){
        $departamentos = Departamento::findOrFail($id);
        $departamentos->nombre_depa = $request->input('nombre');;
        $departamentos->save();

        return redirect()->route('departamento.index');
    }
    public function destroy($id){
        $departamentos = Departamento::findOrFail($id);
        $departamentos->delete();

        return redirect()->route('departamento.index');
    }
}
