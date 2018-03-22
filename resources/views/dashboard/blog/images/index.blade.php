@extends('dashboard.template.main')

@section('title')
    <h3 class='text-center'>Listado de  Imágenes</h3 class='text-center'>
@endsection

@section('content')
    <div class="d-flex">
        @foreach($images as $image)
            <div class="m-1 col-4"> 
                <div class="card">
                    <img class="card-img-top" src="/images/articles/{{$image->name}} " alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> 
                             {{$image->title}}
                        </h5>
                        
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
@endsection