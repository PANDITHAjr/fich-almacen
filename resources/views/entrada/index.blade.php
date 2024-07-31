@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('entrada.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE Salida de Productos</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Item</th>
                        <th>Descripcion</th>
                        <th>TIPO DE PRODUCTO</th>
                        <th>CANTIDAD</th>
                        <th>Personal</th>
                        <th>FECHA</th>
                        <th>Nro. Of.</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($entradas as $entrada)
                            <tr>
                                <td>{{ $entrada->id }}</td>
                                <td>{{ $entrada->producto->nombre }}</td>
                                <td>{{ $entrada->producto->tipo_material }}</td>
                                <td>{{ $entrada->cantidad }}</td>
                                <td>{{ $entrada->personal->nombre}}</td>
                                <td>{{ $entrada->fecha }}</td>
                                <td>{{ $entrada->nro_ofi}}</td>
                                <td>
                                    <a href="{{ route('entrada.show', [$entrada->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('entrada.edit', [$entrada->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('entrada.destroy', [$entrada->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

