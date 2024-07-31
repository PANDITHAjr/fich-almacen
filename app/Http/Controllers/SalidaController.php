<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Personal;
use App\Models\Producto;
use App\Models\Salida;
use App\Models\TipoProducto;
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
        $personales = Personal::all();
        $productos = Producto::all();
        $tipo_productos = TipoProducto::all();
        $departamentos = Departamento::all();
        return view('salida.edit', compact('salida', 'personales', 'productos', 'departamentos'));
    }
    public function update(Request $request, $id){

        $salida = Salida::findOrFail($id);
        $salida->fecha = $request->input('fecha');
        $salida->cantidad = $request->input('cantidad');
        $salida->nro_entrega = $request->input('nro_entrega');
        $salida->id_personal = $request->input('id_personal');
        $salida->id_producto = $request->input('id_producto');
        $salida->save();

        $producto = Producto::find($request->input('id_producto'));
        if ($producto) {
            $cantidadDiff = $salida->cantidad - $producto->cantidad;
            $producto->cantidad += $cantidadDiff;
            $producto->save();
        }

        return redirect()->route('salida.index', $salida->id);
    }
    public function destroy($id){
        $salida = Salida::findOrFail($id);
        $producto = Producto::find($salida->id_producto);

        if ($producto) {
            $cantidadDiff = $salida->cantidad;
            $producto->cantidad -= $cantidadDiff;
            $producto->save();
        }

        $salida->delete();

        return redirect()->route('salida.index');
    }
}
