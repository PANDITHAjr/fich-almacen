@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('salida.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro de Salidas
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="name" type="date" class="validate" name="fecha" value="{{old('fecha')}}">
                                <label for="name">Fecha:</label>
                                @error('fecha')
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
                                <input id="nro_entrega" type="text" class="validate" name="nro_entrega" value="{{old('nro_entrega')}}">
                                <label for="nro_entrega">N° de Entrega:</label>
                                @error('nro_entrega')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                             {{--

                            <div class="input-field col s12 m6">
                                <input id="password" type="text" class="validate" name="password" value="{{old('password')}}">
                                <label for="password">Contraseña:</label>
                                @error('password')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>                   --}}

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
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                                <label for="id_producto">Productos:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_departamento">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($departamentos as $departamento)
                                        <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                    @endforeach
                                </select>
                                <label for="id_departamento">Departamento:</label>
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
