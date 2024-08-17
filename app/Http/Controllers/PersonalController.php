<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\TipoPersonal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personales = Personal::all();
        return view('personal.index', compact('personales'));
    }

    public function create()
    {
        $tipo_personal = TipoPersonal::all();
        return view('personal.create', compact('tipo_personal'));
        return view('personal.create');
    }
    public function store(Request $request)
    {
        $personal = new Personal();
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->telefono = $request->input('telefono');
        $personal->direcion = $request->input('direcion');
        $personal->id_tipo_personal = $request->input('id_tipo_personal');

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');

            if ($file->isValid()) {
                $name = time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('/images/personal');
                $file->move($destinationPath, $name);
                $personal->profile_photo = $name;
            } else {
                return back()->with('error', 'El archivo no es válido.');
            }
        } else {
            return back()->with('error', 'No se subió ningún archivo.');
        }

        $personal->save();

        return redirect()->route('personal.index', $personal->id);
    }
    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.show', compact('personal'));
    }

    public function edit($id)
    {

        $personal = Personal::findOrFail($id);
        $tipo_personal = TipoPersonal::all();
        return view('personal.edit', compact('personal', 'tipo_personal'));
        return view('personal.edit');
    }
    public function update(Request $request, $id)
    {
        // Encuentra el registro de 'Personal' por ID, o lanza un error 404 si no se encuentra
        $personal = Personal::findOrFail($id);

        // Actualizar los campos de la base de datos con los nuevos datos
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->telefono = $request->input('telefono');
        $personal->direcion = $request->input('direcion');
        $personal->id_tipo_personal = $request->input('id_tipo_personal');

        // Verificar si se ha subido un nuevo archivo de imagen
        if ($request->hasFile('profile_photo')) {
            // Verificar si el archivo es válido
            if ($request->file('profile_photo')->isValid()) {
                // Eliminar la foto antigua si existe
                if ($personal->profile_photo && file_exists(public_path('images/personal/' . $personal->profile_photo))) {
                    if (!unlink(public_path('images/personal/' . $personal->profile_photo))) {
                        return back()->with('error', 'No se pudo eliminar la imagen antigua.');
                    }
                }

                // Procesar la nueva imagen
                $image = $request->file('profile_photo');
                $name = time() . '.' . $image->getClientOriginalExtension(); // Crear un nombre único para la imagen
                $destinationPath = public_path('/images/personal');
                $image->move($destinationPath, $name); // Mover la imagen a la carpeta de perfiles

                // Asignar el nuevo nombre de la imagen al campo profile_photo
                $personal->profile_photo = $name;
            } else {
                // Si el archivo no es válido
                return back()->with('error', 'El archivo de imagen no es válido.');
            }
        }

        // Guardar los cambios en la base de datos
        $personal->save();

        // Redirigir a la página de listado con un mensaje de éxito
        return redirect()->route('personal.index')->with('success', 'Registro actualizado con éxito.');
    }
    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();

        return redirect()->route('personal.index');
    }
}
