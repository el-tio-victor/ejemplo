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
    <title>Prueba de Blog</title>
</head>
<body>
    @include('home.partials.header')
    
    <section class="border col-12 d-flex justify-content-around p-4">
        <div class="col-lg-7  border border-primary">
            @yield('content-articles')
        </div>
        <aside class="col-lg-4 border border-success">
            @include('home.partials.contentCategories')
        </aside>
    </section>
    

    
    <script src=" {{asset('plugins/jquery/js/jquery-3.3.1.min.js')}} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">
    </script> 
    <script src=" {{asset('plugins/bootstrap/js/bootstrap.min.js')}} "></script>
    
    @yield('js')   
</body>
</html>