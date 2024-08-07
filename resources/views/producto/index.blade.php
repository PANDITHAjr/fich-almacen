@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('producto.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s8">
            <h5>LISTADO DEL ALMACEN</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>nombre</th>
                        <th>Tipo Material</th>
                        <th>Entrada</th>
                        <th>Salida</th>
                        <th>Stok</th>
                        <th>Tipo de Producto</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ $producto->tipo_material }}</td>
                                <td>{{ $producto->total_entradas }}</td>
                                <td>{{ $producto->total_salidas }}</td>
                                <td>{{ $producto->cantidad }}</td>
                                <td>{{ $producto->Tipo_Producto->descripcion}}</td>

                                {{-- @if (auth()->user()->personal->Tipo_Personal->descripcion == 'Visor') --}}
                                <td>
                                    <a href="{{ route('producto.edit', [$producto->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('producto.show', [$producto->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>
                                    <a href="{{ route('producto.destroy', [$producto->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                                {{-- @endif --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
