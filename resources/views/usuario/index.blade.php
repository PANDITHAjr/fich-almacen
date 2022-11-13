@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('usuario.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE USUARIOS</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre usuario</th>
                        <th>Email</th>
                        <th>Tipo de Personal</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->personal->Tipo_Personal->descripcion}}</td>
                                <td>
                                    <a href="{{ route('usuario.show', [$usuario->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('usuario.edit', [$usuario->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('usuario.destroy', [$usuario->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

