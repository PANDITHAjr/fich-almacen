@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('producto.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro de Nuevo Producto
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{old('nombre')}}">
                                <label for="nombre">Nombre:</label>
                                @error('nombre')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="unidad" type="text" class="validate" name="unidad" value="{{old('unidad')}}">
                                <label for="apellido">Unidad:</label>
                                @error('unidad')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            {{-- <div class="input-field col s12 m6">
                                <select name="id_personal">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($personal as $personal)
                                    <option value="{{ $personal->id }}">{{ $personal->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_personal">Personal:</label>
                            </div> --}}
                             <div class="input-field col s12 m6">
                                <select name="id_tipo_producto">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($tipo_productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->descripcion}}</option>
                                    @endforeach
                                </select>
                                <label for="id_tipo_producto">Producto:</label>
                            </div>

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
