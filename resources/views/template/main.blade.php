<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href=" {{asset('plugins/bootstrap/css/bootstrap.min.css')}} ">
        <link rel="stylesheet" href=" {{asset('css/style-home-blog.css')}} ">
        <link rel='stylesheet' href="{{ asset('css/master-style.css') }}">
        <link rel='stylesheet' href="{{ asset('css/fonts-style.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500i,700" rel="stylesheet">
        <title>Prueba de Blog</title>
    </head>
    <body>
        @section('header')

        @show

        <main>
            @section('content')

            @show
        </main>
        
        
        @section('footer')
            <strong> Todos los derechos reservados</strong>
        @show
    
        

        
        <script src=" {{asset('plugins/jquery/js/jquery-3.3.1.min.js')}} "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
        </script> 
        <script src=" {{asset('plugins/bootstrap/js/bootstrap.min.js')}} "></script>
        <script src=" {{asset('plugins/bootstrap/js/bootstrap.min.js')}} "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
        <script src=" {{asset('plugins/velocity/velocity.min.js')}} "></script>
        <script src=" {{asset('js/animation-logo.js')}} "></script>

        @yield('js')   
    </body>
</html>