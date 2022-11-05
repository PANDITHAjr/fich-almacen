<ul id="sidenav-left" class="sidenav pink lighten-4">
    <li>
        <div class="user-view center">
            <div class="background">
                <img src=https://images.unsplash.com/photo-1506220926022-cc5c12acdb35?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG5lZ3JvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                alt=""
                class="responsive-img">
            </div>

            <div class="row">

                <div class="col s9 push-s3 center-align">
                    <a href="#user" class="centrado"><img class="circle responsive-img" src="{{ asset('https://linea4angol.cl/wp-content/uploads/2018/09/hombre.jpg') }}"></a>
                </div>
            </div>
            <a href="#name"><span class="white-text name">{{ auth()->user()->personal->nombre.' '.auth()->user()->personal->apellido }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader">Administración</a></li>
    <li><a class="waves-effect" href="#">Gestionar Personas<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect" href="#">Gestionar Productos<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect" href="#">Gestionar Ventas<i class="material-icons">class</i></a></li>
</ul>
