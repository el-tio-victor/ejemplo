<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel='stylesheet' href="{{ asset('css/master-style.css') }}">
    <link rel='stylesheet' href="{{ asset('css/dashboard-styles.css') }}"> 
    <link rel='stylesheet' href="{{ asset('css/fonts-style.css') }}"> 
    <link rel="stylesheet" href=" {{asset('plugins/chosen/chosen.css')}} ">
    <link rel="stylesheet" href=" {{asset('plugins/trumbowyg/ui/trumbowyg.min.css')}} ">
    <title> Panel de Administración</title>
</head>
<body>

@include('home.partials.header')

<main class=''>
    <section class=" d-flex flex-wrapp main-wrapper">
        <div class=' text-center  panel-menu'>
            <div class="col border p-1 panel-menu-separator">
                <strong><i class="icon-home"> </i>Panel</strong>
            </div>
            @include('dashboard.template.partials.navDashboard')
            
        </div>
        <div class='border col panel-cont'>
            <section class="container d-flex justify-content-center border  main">
                <div class=" wrapper border">
                    @include('flash::message')
                    @yield('title','DEFAULT')
                    @yield('content')
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
