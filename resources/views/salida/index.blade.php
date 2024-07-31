@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('salida.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
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
                        <th>UNIDAD</th>
                        <th>CANTIDAD</th>
                        <th>Personal</th>
                        <th>FECHA</th>
                        <th>NUMERO DE ENTREGA</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($salidas as $salida)
                            <tr>
                                <td>{{ $salida->Producto->id }}</td>
                                <td>{{ $salida->Producto->nombre }}</td>
                                <td>{{ $salida->TipoMaterial->nombre }}</td>
                                <td>{{ $salida->Departamento->nombre }}</td>
                                <td>{{ $salida->cantidad }}</td>
                                <td>{{ $salida->personal->nombre}}</td>
                                <td>{{ $salida->fecha }}</td>
                                <td>{{ $salida->nro_entrega}}</td>
                                <td>
                                    <a href="{{ route('salida.show', [$salida->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('salida.edit', [$salida->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('salida.destroy', [$salida->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

