<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    //
    public function index()
    {

       $departamentos = Departamento::all();
       return view('departamento.index', compact('departamentos'));

    }

    public function create()
    {
        return view('departamento.create');
    }

    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->nombre_depa = $request->input('nombre_depa');
        $departamento->save();

        return redirect()->route('departamento.index');
    }

    public function show($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('departamento.show', compact('departamento'));
    }

    public function edit($id)
    {
        $departamento = Departamento::findOrFail($id);
        return view('departamento.edit', compact('departamento'));
    }

    public function update(Request $request, $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->nombre_depa = $request->input('nombre_depa');
        $departamento->save();

        return redirect()->route('departamento.index');
    }
    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();

        return redirect()->route('departamento.index');
    }
}
