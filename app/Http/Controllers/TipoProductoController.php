<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    //
    public function index()
    {

       $tipo_productos = TipoProducto::all();
       return view('tipo_producto.index', compact('tipo_productos'));

    }

    public function create()
    {
        return view('tipo_producto.create');
    }

    public function store(Request $request)
    {
        $tipo_producto = new TipoProducto();
        $tipo_producto->descripcion = $request->input('descripcion');
        $tipo_producto->save();

        return redirect()->route('tipo_producto.index');
    }

    public function show($id)
    {
        $tipo_producto = TipoProducto::findOrFail($id);
        return view('tipo_producto.show', compact('tipo_producto'));
    }

    public function edit($id)
    {
        $tipo_producto = TipoProducto::findOrFail($id);
        return view('tipo_producto.edit', compact('tipo_producto'));
    }

    public function update(Request $request, $id)
    {
        $tipo_producto = TipoProducto::findOrFail($id);
        $tipo_producto->descripcion = $request->input('descripcion');
        $tipo_producto->save();

        return redirect()->route('tipo_producto.index');
    }
    public function destroy($id)
    {
        $tipo_producto = TipoProducto::findOrFail($id);
        $tipo_producto->delete();

        return redirect()->route('tipo_producto.index');
    }


}
