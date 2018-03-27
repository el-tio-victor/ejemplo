@extends('template.main')

@component('home.partials.header')
  
        <h1>Index</h1>
    

@endcomponent

@section('content')
    <section class="container-fluid p-3   no-templates">
        <h2>No Templates</h2>
        <div class="container d-flex flex-column align-items-center
          justify-content-center  wrapper">
            <h3 class='f2 text-center'>La web sin plantillas tan única<br> como tu.</h3>
            <div class="d-flex flex-column align-items-center flex-md-row 
            border-bottom no-templates-images">
                <img src="{{asset('images/page/w-f.svg')}}" alt="wireframe-gomez-site">
                <img src="{{asset('images/page/w-f.svg')}}" alt="wireframe-gomez-site">
            </div>
            <div class="border row-1"></div>
            <p class='md-col-6 m-3'>Porque las cosas bien hechas no se hacen en 10 minutos.</p>
        </div>
    </section>

    <section class="container-fluid  p-3  no-templates">
        <h2>Recent Work</h2>
        <div class="container  wrapper">
            @include('home.index.partials.contentWorks')
        </div>
    </section>

    <section class="container-fluid  p-3  recent-articles">
        <h2>Ultimate Articles</h2>
        <div class="container border wrapper">
            @include('home.index.partials.contentArticles')
        </div>
    </section>
    <section class="container-fluid wrapper d-flex align-items-center justify-content-center  p-3 contact">
        <div>
            <div class="container d-md-flex flex-nowrap  border ">
                <div class='col-md-4 d-flex align-items-center justify-content-center  ' >
                    <img src="{{asset('images/page/isotipo-gomez-site.svg')}}" alt="">
                </div>
                <div class='col-md-4 '>
                    <div>
                        <h3 class='c-o'>
                            Víctor Gómez
                        </h3>
                        <p>
                                Egresado de la carrera de TIC de la Universidad Tecnológica de Puebla
                                Apasionado por el desarollo web y su impacto visual.
                        </p>
                    </div>
                </div>
                <div class='col-md-4 d-flex justify-content-center align-items-center '>
                    <div>
                        <p><i class='icon-envelop c-o'> </i>hola@gomez-site.mx</p>
                        <p><i class='icon-phone c-o'> </i>(222) 698 233</p>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>


@endsection
@section('footer')
    @include('template.partials.footer')
@endsection