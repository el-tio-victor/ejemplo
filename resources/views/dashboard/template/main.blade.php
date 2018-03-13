<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500i,700" rel="stylesheet">
    <link rel='stylesheet' href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel='stylesheet' href="{{ asset('css/master-style.css') }}">
    <link rel='stylesheet' href="{{ asset('css/dashboard-styles.css') }}"> 
    <link rel='stylesheet' href="{{ asset('css/fonts-style.css') }}"> 
    <link rel="stylesheet" href=" {{asset('plugins/chosen/chosen.css')}} ">
    <link rel="stylesheet" href=" {{asset('plugins/trumbowyg/ui/trumbowyg.min.css')}} ">
    <title> Panel de Administración</title>
</head>
<body>

@component('home.partials.header')
@endcomponent

<main class=''>
    <section class=" d-flex flex-wrapp main-wrapper">
        <div class=' text-center  panel-menu'>
            <div class="col p-1 panel-menu-separator">
                <strong><i class="icon-home"> </i>Panel</strong>
            </div>
            <div class="col  p-1 panel-menu-header">
                <strong>Blog</strong>
            </div>
            @include('dashboard.template.partials.navDashboard')
            
        </div>
        <div class=' col panel-cont'>
            <section class="container d-flex justify-content-center border  main">
                <div class=" wrapper ">
                    @include('flash::message')
                    @yield('title')
                    @section('content')
                        <div class="text-center color-orang">
                            <i class="icon-keyboard f7 color-orange"></i>
                            <hr class='color-orange'>
                            <span class='f2'>Panel de Administración</span>
                        </div>
                    @show
                </div>
   
            </section>
        </div>
    </section>
</main>


    @include('dashboard.template.partials.footer')
</body>
<script src=" {{ asset('plugins/jquery/js/jquery-3.3.1.min.js')}} "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src=" {{ asset('plugins/bootstrap/js/bootstrap.js')}} "></script>
<script src="{{ asset('plugins/chosen/chosen.jquery.js') }} "></script>
<script src=" {{ asset('plugins/trumbowyg/trumbowyg.min.js') }} "></script>
<script>
    $('.msg , .alert').not('.alert-important').delay(5000).fadeOut(350);
    $('.textarea-content').trumbowyg();
</script>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
</html>
