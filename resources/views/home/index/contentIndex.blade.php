@extends('template.main')

@component('home.partials.header')
  
        <h1>Index</h1>
    

@endcomponent

@section('content')
    <section class="container-fluid p-3  border border-success no-templates">
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

    <section class="container-fluid  p-3 border border-success no-templates">
        <h2>Recent Work</h2>
        <div class="container border wrapper">
            @include('home.index.partials.contentWorks')
        </div>
    </section>

    <section class="container-fluid  p-3 border border-success no-templates">
        <h2>Ultimate Articles</h2>
        <div class="container border wrapper">
        </div>
    </section>


@endsection
@section('footer')
    @include('template.partials.footer')
@endsection