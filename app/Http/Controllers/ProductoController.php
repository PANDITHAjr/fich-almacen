<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index()
    {
        // Obtener todos los productos con sus entradas y salidas
        $productos = Producto::with(['entradas', 'salidas'])->get()->map(function($producto) {
            // Calcular el total de entradas y salidas
            $producto->total_entradas = $producto->entradas->sum('cantidad');
            $producto->total_salidas = $producto->salidas->sum('cantidad');
            // Calcular el stock actual
            $producto->stock = $producto->total_entradas - $producto->total_salidas;
            return $producto;
        });

        // Pasar los datos a la vista
        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        $tipo_productos = TipoProducto::all();
        return view('producto.create', compact('tipo_productos'));
    }
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->cantidad = $request->input('cantidad');
        $producto->tipo_material = $request->input('tipo_material');
        $producto->id_tipo_producto = $request->input('id_tipo_producto');
        $producto->save();

        return redirect()->route('producto.index', $producto->id);
    }
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'));
    }

    public function edit($id)
    {

        $producto = Producto::findOrFail($id);
        $tipo_producto = TipoProducto::all();
        $personal = Personal::all();
        return view('producto.edit', compact('producto', 'tipo_producto'));
    }
    public function update(Request $request, $id)
    {

        $producto = Producto::findOrfail($id);
        $producto->nombre = $request->input('nombre');
        $producto->unidad = $request->input('unidad');
        $producto->id_tipo_producto = $request->input('id_tipo_producto');
        return redirect()->route('personal.index');
    }
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index');
    }
}
