@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('producto.update', [$producto->id]) }}">
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
                                <input id="nombre" type="text" class="validate" name="nombre" value="{{ $producto->nombre }}">
                                <label for="nombre">Nombre:</label>
                                @error('nombre')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="cantidad" type="text" class="validate" name="cantidad" value="{{ $producto->cantidad }}">
                                <label for="cantidad">Cantidad:</label>
                                @error('cantidad')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>


                            <div class="input-field col s12 m6">
                                <input id="tipo_material" type="text" class="validate" name="tipo_material" value="{{ $producto->tipo_material }}">
                                <label for="tipo_material">Tipo Material:</label>
                                @error('tipo_material')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

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

                        <div class="card-action right-align">
                            <button type="submit" class="waves-effect waves-brown btn-flat red-text bold" onclick="showProgress()">Guardar</button>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>


@endsection
