<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Personal;
use App\Models\Producto;
use App\Models\Salida;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    //
    public function index(){
        $salidas = Salida::all();
        return view('salida.index', compact('salidas'));
    }

    public function create(){
        $personales= Personal::all();
        $productos = Producto::all();
        $departamentos = Departamento::all();
        return view('salida.create', compact('personales', 'productos', 'departamentos'));

    }
    public function store(Request $request){
        $salida = new Salida();
        $salida->fecha = $request->input('fecha');
        $salida->cantidad = $request->input('cantidad');
        $salida->nro_entrega = $request->input('nro_entrega');
        $salida->id_personal = $request->input('id_personal');
        $salida->id_producto = $request->input('id_producto');
        $salida->id_departamento = $request->input('id_departamento');
        $salida->save();

        $producto = Producto::find($request->input('id_producto'));
        if ($producto) {
            $producto->cantidad -= $request->input('cantidad');
            $producto->save();
        }

        return redirect()->route('salida.index', $salida->id);

    }
    public function show($id){
        $salida = Salida::findOrFail($id);
        return view('salida.show', compact('salida'));
    }

    public function edit($id){

        $salida = Salida::findOrFail($id);
        $personal = Personal::all();
        return view('personal.edit', compact('personal'));
        $producto = Producto::all();
        return view('producto.edit', compact('producto'));
        $tipo_producto = TipoProducto::all();
        return view('tipo_producto.create', compact('tipo_producto'));
        return view('entrada.edit');
    }
    public function update(Request $request, $id){
        $salida = new Salida();
        $salida->fecha = $request->input('fecha');
        $salida->cantidad = $request->input('cantidad');
        $salida->n_entrega = $request->input('n_entrega');
        $salida->id_personal = $request->input('id_personal');
        $salida->id_producto = $request->input('id_producto');
        $salida->id_tipo_producto = $request->input('id_tipo_producto');
        $salida->save();

        return redirect()->route('salida.index', $salida->id);
    }
    public function destroy($id){
        $salida = Salida::findOrFail($id);
        $salida->delete();

        return redirect()->route('salida.index');
    }
}
