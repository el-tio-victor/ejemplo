@extends('dashboard.template.main')

@section('title')
    <h2>Listado de articulos</h2>
    
@endsection

@section('content')
    <div class="d-flex justify-content-end  mb-3">
        <div class="align-middle  col-8 wrapper-search">
            {!! Form::open(['route'=>'articles.index','method'=>'GET','class'=>'']) !!}
            <div class='d-flex ' style='border:solid .1rem #e9ecef !important;'>
                {!! Form::text('title',null,['class'=>'col','placeholder'=>'Busqueda', "aria-describedby"=>"search"]) !!}
                <div class="input-group-append">
                    <span class="input-group-text icon-search" id="search"></span>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <a class='btn btn-success' href=" {{route('articles.create')}} "><span class="icon-plus"></span></a>
    </div>
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td> {{$article->title}} </td>
                        <td> {{$article->category->name}} </td>
                        <td> {{$article->user->name}} </td>
                        <td>
                            <a href="{{route('dashboard.articles.destroy',$article->id )}}" 
                                class="btn btn-danger">
                                <span class="icon-cross"></span>
                            </a>
                            <a href="{{route('articles.edit',$article->id )}}" 
                                class="btn btn-warning">
                                <span class="icon-font-size"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $articles->render() !!}
    </div>
@endsection