@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('personal.create') }}" class="waves-effect waves-light btn dark-primary-color">Registrar</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE PERSONAL</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>telefono</th>
                        <th>direcion</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($personales as $personal)
                            <tr>
                                <td>{{ $personal->id }}</td>
                                <td>{{ $personal->nombre }}</td>
                                <td>{{ $personal->apellido }}</td>
                                <td>{{ $personal->telefono }}</td>
                                <td>{{ $personal->direcion }}</td>
                                <td>
                                    <a href="{{ route('personal.show', [$personal->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>
                                    <a href="{{ route('personal.edit', [$personal->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a>
                                    <a href="{{ route('personal.destroy', [$personal->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
