<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use Illuminate\Http\Request;

class UnidadController extends Controller
{
    //
    public function index(){
        $unidades = Unidad::all();
        return view('unidad.index', compact('unidades'));
    }

    public function create(){
        return view('unidad.create', compact('unidad'));
    }
    public function store(Request $request){
        $unidad = new Unidad();
        $unidad->nombre = $request->input('nombre');
        $unidad->save();

        return redirect()->route('unidad.index', $unidad->id);

    }
    public function show($id){
        $unidad = Unidad::findOrFail($id);
        return view('unidad.show', compact('unidad'));
    }

    public function edit($id){

        $unidad = Unidad::findOrFail($id);

        return view('unidad.edit', compact('unidad'));
    }
    public function update(Request $request, $id){
        $unidad = Unidad::findOrFail($id);
        $unidad->nombre = $request->input('nombre');
        $unidad->save();

        return redirect()->route('unidad.index');
    }
    public function destroy($id){
        $unidad = Unidad::findOrFail($id);
        $unidad->delete();

        return redirect()->route('unidad.index');
    }
}
