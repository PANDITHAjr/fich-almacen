@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('personal.update', [$personal->id]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Edición
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{ $personal->nombre }}">
                                <label for="nombre">Nombre:</label>
                                @error('nombre')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="apellido" type="text" class="validate" name="apellido" value="{{ $personal->apellido }}">
                                <label for="apellido">Apellido:</label>
                                @error('apellido')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m3">
                                <input id="direcion" type="text" class="validate" name="direcion" value="{{ $personal->direcion }}">
                                <label for="direcion">Dirección:</label>
                                @error('direcion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m3">
                                <input id="telefono" type="number" class="validate" name="telefono" value="{{ $personal->telefono }}">
                                <label for="telefono">telefono:</label>
                                @error('telefono')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>


                            <div class="input-field col s12 m6">
                                <select name="id_tipo_personal">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($tipo_personal as $personal)
                                    <option value="{{ $personal->id }}">{{ $personal->descripcion}}</option>
                                    @endforeach
                                </select>
                                <label for="id_tipo_personal">Personal:</label>
                            </div>
                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>


@endsection
