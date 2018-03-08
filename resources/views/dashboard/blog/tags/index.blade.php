@extends('dashboard.template.main')

@section('title')
    <h2>Lista de Tag</h2>
@endsection

@section('content')
   <div class="d-flex justify-content-end  mb-3">
        <div class="align-middle  col-8 wrapper-search">
            {!! Form::open(['route'=>'tags.index','method'=>'GET','class'=>'']) !!}
            <div class='d-flex ' style='border:solid .1rem #e9ecef !important;'>
                {!! Form::text('name',null,['class'=>'col','placeholder'=>'Busqueda', "aria-describedby"=>"search"]) !!}
                <div class="input-group-append">
                    <span class="input-group-text icon-search" id="search"></span>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <a class='align-bottom btn btn-success' href=" {{route('tags.create')}} "><span class="icon-plus"></span></a>
    </div>
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td> {{$tag->name}} </td>
                        <td>
                            <a class='btn btn-danger' href=" {{route('dashboard.tags.destroy',$tag->id)}} ">
                            <span class='icon-cross'></span>
                            </a>
                            <a class='btn btn-warning' href=" {{route('tags.edit',$tag->id)}} ">
                            <span class='icon-font-size'></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            {!! $tags->render() !!}
        </nav>
    </div>
@endsection