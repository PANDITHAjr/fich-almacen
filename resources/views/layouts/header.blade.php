@auth
    <header>
        @include('layouts.menu-sidenav')
    </header>
@endauth

<nav class="indigo darken-4">
    <div class="nav-wrapper">
        @auth
        <a style="color: #d50000"  href="{{ route('home') }}" class="brand-logo center hide-on-small-only ">INVENTARIO - FICH</a>
        <ul id="nav-mobile" class="right">
            <li><a  href="{{ route('home') }}" class="waves-effect dark-primary-color-text" type="submit"><i class="material-icons">account_balance</i></a></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons left">exit_to_app</i>Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
            </li>
            <li>
                <a href="#" role="button">
                    {{ Auth::user()->name }}
                </a>
            </li>
        </ul>
        <a href="#!" data-target="sidenav-left" class="sidenav-trigger left show-on-medium-and-up"><i class="material-icons dark-primary-color-icon">menu</i></a>

        @endauth

        @yield('breadcrumb')
    </div>
</nav>
