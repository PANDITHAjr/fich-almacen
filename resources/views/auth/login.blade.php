@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col s6 offset-m3">

            <div class="row"></div>
            <div class="row"></div>

            <div class="card green lighten-5">
                <div class="card-content">

                    <div style="color: red" class="card-title">Inicio de sesión</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="col s12 input-field">
                                <input type="text" name="email" id="email">
                                <label for="email">Email</label>
                                @error('email')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 input-field">
                                <input type="password" name="password" id="password">
                                <label for="password">Contraseña</label>
                                @error('password')
                                    <span class="blue-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col s12 center">
                                <button type="submit" class="btn btn-primary indigo darken-4">
                                    ingresar
                                </button>

                                    <a class="btn btn-primary red accent-4" href="https://api.whatsapp.com/send?phone=59167671718">
                                        {{ __('Olvidaste tu Usuario?') }}
                                    </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
