<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('https://img.icons8.com/external-prettycons-flat-prettycons/47/null/external-university-education-prettycons-flat-prettycons-1.png ') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('https://img.icons8.com/external-prettycons-flat-prettycons/47/null/external-university-education-prettycons-flat-prettycons-1.png') }}">
    <title>FICH</title>

    @include('layouts.styles')
    @stack('styles')
</head>

<body>
@include('layouts.header')
<main class="primary-background">
    <div class="container"></div>
    <div class="row">
        <div class="col s12 m12 l12 l12 xl10 offset-xl1">
            @include('layouts.response')
            @yield('content')
        </div>
    </div>

    @include('layouts.preloader')
    @include('layouts.footer')
</main>

@include('layouts.scripts')
@stack('scripts')
</body>
</html>
