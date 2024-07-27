@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl10 offset-xl1">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos Personales
                    </span>

                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s4 offset-s4">
                            <div class="row valign-wrapper">
                                <div class="col s12">
                                    <img src="https://img.freepik.com/vector-premium/perfil-hombre-dibujos-animados_18591-58482.jpg?w=2000" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div style="color: #d50000" class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Nombre:</p>
                        </div>
                        <div class="col s8 offset-s2 m7">
                            <p style="color: #1a237e" class="secondary-text-color">{{$personal->nombre}}</p>
                        </div>
                        <div style="color: #d50000" class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Apellido:</p>
                        </div>
                        <div style="color: #1a237e" class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$personal->apellido}}</p>
                        </div>

                        <div style="color: #d50000" class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Teléfono:</p>
                        </div>
                        <div style="color: #1a237e" class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$personal->telefono}}</p>
                        </div>

                        <div style="color: #d50000" class="col s12 m5">
                            <p class="primary-text-color secondary-text-style">Dirección:</p>
                        </div>
                        <div style="color: #1a237e" class="col s8 offset-s2 m7">
                            <p class="secondary-text-color">{{$personal->direcion}}</p>
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('personal.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
