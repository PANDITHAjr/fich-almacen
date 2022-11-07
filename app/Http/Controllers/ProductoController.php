<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function create(){
        $personal = Personal::all();
        return view('producto.create', compact('personal'));

        $tipo_producto = TipoProducto::all();
        return view('producto.create', compact('tipo_producto'));
        return view('producto.create');
    }
    public function store(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->unidad = $request->input('unidad');
        $producto->id_personal = $request->input('id_personal');
        $producto->id_tipo_producto = $request->input('id_tipo_producto');
        $producto->save();

        return redirect()->route('producto.index', $producto->id);

    }
    public function show($id){
        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'));
    }

    public function edit($id){

        $producto = Producto::findOrFail($id);
        $tipo_producto = TipoProducto::all();
        return view('producto.edit', compact('producto','tipo_producto'));
        return view('producto.edit');
    }
    public function update(Request $request, $id){

        $producto = Producto::findOrfail($id);
        $producto->nombre = $request->input('nombre');
        $producto->unidad = $request->input('unidad');
        $producto->id_personal = $request->input('id_personal');
        $producto->id_tipo_producto = $request->input('id_tipo_producto');
        return redirect()->route('personal.index');
    }
    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index');
    }
}
