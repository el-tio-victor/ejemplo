@extends('dashboard.template.main')

@section('title')
    <h2>Nuevo articulo</h2>
@endsection

@section('content')
    <div class="border p-3">
        {!! Form::open( ['route'=>'articles.store','method'=>'POST','files'=>true] ) !!}
            <div class="col d-flex form-group">
                {!! Form::label('title','Titulo') !!}
                <div class="col-8">
                    {!! Form::text('title',null,['class'=>'form-control'
                    ,'placeholder'=>'Titulo Articulo','required']) !!}
                </div>
            </div>
            <div class="col form-group">
                {!!  Form::label('category_id','Categoria') !!}
                {!!  Form::select('category_id',$categories,null,[
                    'class'=>'form-control',
                    'required',
                    'placeholder'=>'Seleccione ...']) !!}
            </div>
            <div class="col form-group">
                {!! Form::label('content','Contenido') !!}
                {!! Form::textarea('content',null,['class'=>'form-control textarea-content'])!!}
            </div>
            <div class="col form-group">
                {!! Form::label('tags','Tags') !!}
                {!! Form::select('tags[]',$tags,null,['class'=>'form-control','multiple']) !!}
            </div>
            <div class="col form-group">
                {!! Form::label('image','Imagen') !!}
                {!!  Form::file('image') !!}
            </div>
            <div class="col border-top text-center">
                {!! Form::submit('Crear',['class'=>'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}        
    </div>
@endsection