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
                                <input id="cantidad" type="number" class="validate" name="cantidad" value="{{old('cantidad')}}">
                                <label for="cantidad">Cantidad:</label>
                                @error('cantidad')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="tipo_material" type="text" class="validate" name="tipo_material" value="{{old('tipo_material')}}">
                                <label for="tipo_material">Tipo Material:</label>
                                @error('tipo_material')
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
                                <label for="id_tipo_producto">Tipo Producto:</label>
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
