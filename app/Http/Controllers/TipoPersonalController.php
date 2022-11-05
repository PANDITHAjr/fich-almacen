<?php

namespace App\Http\Controllers;

use TipoPersonal;
use Illuminate\Http\Request;

class TipoPersonalController extends Controller
{

    public function index()
    {
       $tipo_personales = TipoPersonal::all();
       return view('tipo_personal.index', compact('tipo_personales'));
    }

    public function create()
    {
        return view('tipo_personal.create');
    }

    public function store(Request $request)
    {
        $tipo_personal = new TipoPersonal();
        $tipo_personal->descripcion = $request->input('descripcion');
        $tipo_personal->save();

        return redirect()->route('tipo_personal.index');
    }

    public function show($id)
    {
        $tipo_personal = TipoPersonal::findOrFail($id);
        return view('tipo_personal.show', compact('tipo_personal'));
    }

    public function edit($id)
    {
        $tipo_personal = TipoPersonal::findOrFail($id);
        return view('tipo_personal.edit', compact('tipo_personal'));
    }

    public function update(Request $request, $id)
    {
        $tipo_personal = TipoPersonal::findOrFail($id);
        $tipo_personal->descripcion = $request->input('descripcion');
        $tipo_personal->save();

        return redirect()->route('tipo_personal.index');
    }
    public function destroy($id)
    {
        $tipo_personal = TipoPersonal::findOrFail($id);
        $tipo_personal->delete();

        return redirect()->route('tipo_personal.index');
    }

}
