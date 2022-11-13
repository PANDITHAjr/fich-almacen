@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="row">

                    <br>
                    <br>
                    <div class="col s12 m4">
                        <div class="card">
                            <span  style="color: black"  class="card-title">FACULTAD</span>
                            <div class="card-image">
                                <img src="https://plus.unsplash.com/premium_photo-1661284857549-21bba6eda0b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2N0b2t8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60">

                            </div>
                            <div class="card-action">
                                <a href="{{ route('producto.index') }}", class="btn btn-floating red accent-4 pulse"><i class="material-icons">account_balance</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;">SCTOK</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col s12 m4">
                        <div class="card">
                            <span style="color: black" class="card-title">INTEGRAL</span>
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80">

                            </div>
                            <div class="card-action">
                                <a href="#", class="btn btn-floating indigo darken-4 pulse"><i class="material-icons">assignment_returned</i></a>
                                <a style="color:#d50000; font-size: 14px; font-family: Georgia;">RESG. ENTRADAS</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col s12 m4">
                        <div class="card">
                            <span style="color: black"  class="card-title">DEL CHACO</span>
                            <div class="card-image">
                                <img src="https://images.unsplash.com/photo-1620388640785-892616248ec8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8aW52ZW50YXJpbyUyMGVudHJhZGFzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60">

                            </div>
                            <div class="card-action">
                                <a href="#", class="btn btn-floating red accent-4 pulse"><i class="material-icons">forward</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;"> RESG. SALIDAS</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
