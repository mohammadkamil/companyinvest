<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Saikolab') }} Investment</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', Helvetica, sans-serif;
        box-sizing: border-box;
    }



    .grid-container {
        display: grid;
        grid-template-columns: 0px 1fr 0px;
        grid-template-rows: 50px 1fr 50px;
        grid-template-areas:
            "sidenav header"
            "sidenav main"
            "sidenav footer";
        height: 100%;
    }


    .header {
        grid-area: header;
        background-color: #648ca6;
    }

    .main {
        grid-area: main;
        background-color: #ffffff;
    }

    .footer {
        grid-area: footer;
        background-color: #648ca6;
    }

    .header,
    .footer {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 16px;
        background-color: #cc3333;
        color: #ffffff
    }
    .nav-tabs .nav-link.active{
        color: white;
    background-color: rebeccapurple;
    border-color: rebeccapurple
} .active{
    color: white;
    background-color: rebeccapurple
}tbody{
    background-color: white
}.divTab{
    padding: 2.5%;
}.container{
    padding:2.5%
}
</style>
</head>

<body>

   @yield('content')

    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() { $('body').bootstrapMaterialDesign(); });
    </script>
</body>

</html>
