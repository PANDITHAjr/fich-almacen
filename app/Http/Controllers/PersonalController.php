<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\TipoPersonal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personales = Personal::all();
        return view('personal.index', compact('personales'));
    }

    public function create(){
        $tipo_personal = TipoPersonal::all();
        return view('personal.create', compact('tipo_personal'));
        return view('personal.create');
    }
    public function store(Request $request){
        $personal = new Personal();
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->telefono = $request->input('telefono');
        $personal->direcion = $request->input('direcion');
        $personal->id_tipo_personal = $request->input('id_tipo_personal');
        $personal->save();

        return redirect()->route('personal.index', $personal->id);

    }
    public function show($id){
        $personal = Personal::findOrFail($id);
        return view('personal.show', compact('personal'));
    }

    public function edit($id){

        $personal = Personal::findOrFail($id);
        $tipo_personal = TipoPersonal::all();
        return view('personal.edit', compact('personal','tipo_personal'));
        return view('personal.edit');
    }
    public function update(Request $request, $id){
        $personal = Personal::findOrFail($id);
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->telefono = $request->input('telefono');
        $personal->direcion = $request->input('direcion');
        $personal->id_tipo_personal = $request->input('id_tipo_personal');
        $personal->save();

        return redirect()->route('personal.index');
    }
    public function destroy($id){
        $personal = Personal::findOrFail($id);
        $personal->delete();

        return redirect()->route('personal.index');
    }
}
