<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use App\Models\Personal;
use App\Models\Producto;
use App\Models\TipoMaterial;
use App\Models\Salida;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    //
    public function index()
    {
        $entradas = Entrada::all();
        return view('entrada.index', compact('entradas'));
    }


    public function create()
    {
        $personales = Personal::all();
        $productos = Producto::all();
        return view('entrada.create', compact('productos', 'personales'));
    }
    public function store(Request $request)
    {
        $entrada = new Entrada();
        $entrada->fecha = $request->input('fecha');
        $entrada->cantidad = $request->input('cantidad');
        $entrada->nro_ofi = $request->input('nro_ofi');
        $entrada->id_personal = $request->input('id_personal');
        $entrada->id_producto = $request->input('id_producto');
        $entrada->save();

        $producto = Producto::find($request->input('id_producto'));
        if ($producto) {
            $producto->cantidad += $request->input('cantidad');
            $producto->save();
        }

        return redirect()->route('entrada.index', $entrada->id);
    }
    public function show($id)
    {
        $entrada = Entrada::findOrFail($id);
        return view('entrada.show', compact('entrada'));
    }

    public function edit($id)
    {

        $entrada = Entrada::findOrFail($id);
        $personales = Personal::all();
        $productos = Producto::all();

        return view('entrada.edit', compact('entrada', 'productos', 'personales'));
    }
    public function update(Request $request, $id)
    {
        $entrada = Entrada::findOrFail($id);
        $entrada->fecha = $request->input('fecha');
        $entrada->cantidad = $request->input('cantidad');
        $entrada->nro_ofi = $request->input('nro_ofi');
        $entrada->id_personal = $request->input('id_personal');
        $entrada->id_producto = $request->input('id_producto');
        $entrada->save();


        $producto = Producto::find($request->input('id_producto'));
        if ($producto) {
            $cantidadDiff = $entrada->cantidad - $producto->cantidad;
            $producto->cantidad += $cantidadDiff;
            $producto->save();
        }

        return redirect()->route('entrada.index', $entrada->id);
    }
    public function destroy($id)
    {
        $entrada = Entrada::findOrFail($id);
        $producto = Producto::find($entrada->id_producto);

        if ($producto) {
            $cantidadDiff = $entrada->cantidad;
            $producto->cantidad -= $cantidadDiff;
            $producto->save();
        }

        $entrada->delete();

        return redirect()->route('entrada.index');
    }
}
