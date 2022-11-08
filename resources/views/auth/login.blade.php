@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col s6 offset-m3">

            <div class="row"></div>
            <div class="row"></div>

            <div class="card green lighten-5">
                <div class="card-content">

                    <div style="color: blue" class="card-title">Inicio de sesión</div>

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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col s12 center">
                                <button type="submit" class="btn btn-primary">
                                    ingresar
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
