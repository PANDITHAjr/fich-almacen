<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Personal;
use App\Models\Producto;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    //
    public function index(){
        $entradas = Entrada::all();
        return view('entrada.index', compact('entradas'));
    }

    
    public function create(){
        $personal = Personal::all();
        return view('entrada.create', compact('personal'));
        $producto = Producto::all();
        return view('entrada.create', compact('producto'));
        return view('entrada.create');
    }
    public function store(Request $request){
        $entrada = new Entrada();
        $entrada->fecha = $request->input('fecha');
        $entrada->cantidad = $request->input('cantidad');
        $entrada->nro_ofi = $request->input('nro_ofi');
        $entrada->id_personal = $request->input('id_personal');
        $entrada->id_producto = $request->input('id_producto');
        $entrada->save();

        return redirect()->route('entrada.index', $entrada->id);

    }
    public function show($id){
        $entrada = Entrada::findOrFail($id);
        return view('entrada.show', compact('entrada'));
    }

    public function edit($id){

        $entrada = Entrada::findOrFail($id);
        $personal = Personal::all();
        return view('personal.edit', compact('personal'));
        $producto = Producto::all();
        return view('producto.edit', compact('producto'));

        return view('entrada.edit');
    }
    public function update(Request $request, $id){
        $entrada = new Entrada();
        $entrada->fecha = $request->input('fecha');
        $entrada->cantidad = $request->input('cantidad');
        $entrada->nro_ofi = $request->input('nro_ofi');
        $entrada->id_personal = $request->input('id_personal');
        $entrada->id_producto = $request->input('id_producto');
        $entrada->save();

        return redirect()->route('entrada.index', $entrada->id);
    }
    public function destroy($id){
        $entrada = Entrada::findOrFail($id);
        $entrada->delete();

        return redirect()->route('entrada.index');
    }
}
