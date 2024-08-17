@extends('layouts.app')

@section('content')
<div class="row">
    <form method="POST" action="{{ route('personal.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
            <div id="panel-left" class="card">

                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Formulario de Registro de Nuevo Personal
                    </span>
                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <!-- Campos de entrada -->
                        <div class="input-field col s12 m6">
                            <input id="nombre" type="text" class="validate" name="nombre" value="{{ old('nombre') }}">
                            <label for="nombre">Nombres:</label>
                            @error('nombre')
                                <span class="helper-text red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <input id="apellido" type="text" class="validate" name="apellido" value="{{ old('apellido') }}">
                            <label for="apellido">Apellidos:</label>
                            @error('apellido')
                                <span class="helper-text red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="direcion" type="text" class="validate" name="direcion" value="{{ old('direcion') }}">
                            <label for="direcion">Dirección:</label>
                            @error('direcion')
                                <span class="helper-text red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m4">
                            <input id="telefono" type="number" class="validate" name="telefono" value="{{ old('telefono') }}">
                            <label for="telefono">Teléfono:</label>
                            @error('telefono')
                                <span class="helper-text red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="input-field col s12 m6">
                            <select name="id_tipo_personal">
                                <option value="" disabled selected>Seleccione una opción:</option>
                                @foreach($tipo_personal as $personal)
                                    <option value="{{ $personal->id }}">{{ $personal->descripcion }}</option>
                                @endforeach
                            </select>
                            <label for="id_tipo_personal">Tipo de Personal:</label>
                        </div>

                        <!-- Campo para cargar la foto de perfil -->
                        <div class="input-field col s12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>Foto de Perfil</span>
                                    <input id="profile_photo" type="file" name="profile_photo" accept="image/*" onchange="previewImage(event)">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Selecciona una imagen">
                                </div>
                            </div>

                            <!-- Vista previa de la imagen -->
                            <div id="preview-container" class="preview-container">
                                <img id="preview-image" src="#" alt="Vista previa de la imagen" style="display: none;">
                            </div>

                            @error('profile_photo')
                                <span class="helper-text red-text"> {{ $message }} </span>
                            @enderror
                        </div>

                    </div>
                </div>

                <div class="card-action right-align">
                    <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                </div>

            </div>
        </div>
    </form>
</div>

<!-- Agregar CSS para el diseño -->
<style>
    .file-field .btn {
        background-color: #2196F3; /* Color del botón */
        color: white; /* Color del texto del botón */
        border-radius: 4px; /* Bordes redondeados */
    }

    .file-path-wrapper {
        margin-top: 0; /* Alinear el campo de texto al botón */
    }

    .preview-container {
        margin-top: 20px; /* Espaciado entre el campo de archivo y la vista previa */
    }

    #preview-image {
        max-width: 100%; /* Ajustar la imagen al contenedor */
        border-radius: 4px; /* Bordes redondeados para la vista previa */
    }
</style>

<!-- Agregar JavaScript para la vista previa -->
<script>
    function previewImage(event) {
        const input = event.target;
        const previewImage = document.getElementById('preview-image');
        const previewContainer = document.getElementById('preview-container');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block'; // Mostrar la imagen
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            previewImage.src = '#';
            previewImage.style.display = 'none'; // Ocultar la imagen si no hay archivo
        }
    }
</script>
@endsection

