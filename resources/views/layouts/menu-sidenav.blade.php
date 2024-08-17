<ul id="sidenav-left" class="sidenav indigo blue darken-1">
    <li>
        <div class="user-view center">
            <div class="background">
                <img src="https://images.unsplash.com/photo-1506220926022-cc5c12acdb35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG5lZ3JvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                alt=""
                class="responsive-img">
            </div>

            <div class="row">
                @php
                    $user = auth()->user();
                    $personal = $user ? $user->personal : null;
                @endphp

                @if ($personal && $personal->profile_photo)
                <div class="col s12 center-align">
                    <div class="profile-photo-container">
                        <img class="circle responsive-img"
                             src="{{ asset('images/personal/' . $personal->profile_photo) }}" alt="Foto de Perfil">
                    </div>
                </div>
                @else
                <div class="col s12 center-align">
                    <div class="profile-photo-container">
                        <img src="{{ asset('https://p4.wallpaperbetter.com/wallpaper/835/203/668/man-profile-silhouette-circle-wallpaper-preview.jpg') }}" alt="Foto de Perfil" class="circle responsive-img">
                    </div>
                </div>
                @endif

                {{-- <a href="#user" class="centrado"><img class="circle responsive-img"
                        src="{{ asset('https://linea4angol.cl/wp-content/uploads/2018/09/hombre.jpg') }}"></a> --}}
            </div>

            <a href="#name"><span class="white-text name">{{ auth()->user()->personal->nombre.' '.auth()->user()->personal->apellido }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->personal->Tipo_Personal->descripcion }}</span></a>
        </div>
    </li>

    <li><a  class="subheader black-text">Administración:</a></li>
    <li><a  style="color: #d50000"class="waves-effect" href="{{ route('personal.index') }}">Gestionar Personas<i class="material-icons">class</i></a></li>
    <li><a  style="color: #d50000" class="waves-effect" href="{{ route('tipo_personal.index') }}">Gestionar Tipo Personal<i class="material-icons">class</i></a></li>
    <li><a  style="color: #d50000" class="waves-effect" href="{{ route('usuario.index') }}">Gestionar Usuarios<i class="material-icons">class</i></a></li>
    <li><a  style="color: #d50000" class="waves-effect" href="{{ route('producto.index') }}">Gestionar Almacen<i class="material-icons">class</i></a></li>
    <li><a  style="color: #d50000" class="waves-effect" href="{{ route('tipo_producto.index') }}">Gestionar Tipo Productos<i class="material-icons">class</i></a></li>
    <li><a  style="color: #d50000" class="waves-effect" href="{{ route('departamento.index') }}">DEPARTAMENTOS<i class="material-icons">class</i></a></li>
</ul>
