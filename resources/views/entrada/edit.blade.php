@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('entrada.update', [$entrada->id]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
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
                                <input id="fecha" type="date" class="validate" name="fecha" value="{{ $entrada->fecha }}">
                                <label for="fecha">Fecha:</label>
                                @error('fecha')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="cantidad" type="number" class="validate" name="cantidad" value="{{ $entrada->cantidad }}">
                                <label for="cantidad">Cantidad:</label>
                                @error('cantidad')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="nro_ofi" type="number" class="validate" name="nro_ofi" value="{{ $entrada->nro_ofi }}">
                                <label for="nro_ofi">N° de Oficio:</label>
                                @error('nro_ofi')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_personal">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($personales as $personal)
                                    <option value="{{ $personal->id }}">{{ $personal->nombre.' '.$personal->apellido}}</option>
                                    @endforeach
                                </select>
                                <label for="id_personal">Personal:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_producto">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="id_producto">PRODUCTOS:</label>
                            </div>

                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="btn-floating btn-large blue pulse"><i class="material-icons">save</i></a>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>


@endsection
