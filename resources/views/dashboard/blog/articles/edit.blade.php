@extends('dashboard.template.main')

@section('title')
    <h2>Editar Articulo</h2>
@endsection

@section('content')
    <div class="border p-3">
        {!! Form::open( ['route'=>['articles.update',$article],'method'=>'PUT'] ) !!}
            <div class="col d-flex form-group">
                {!! Form::label('title','Titulo') !!}
                <div class="col-8">
                    {!! Form::text('title',$article->title,['class'=>'form-control'
                    ,'placeholder'=>'Titulo Articulo','required']) !!}
                </div>
            </div>
            <div class="col form-group">
                {!!  Form::label('category_id','Categoria') !!}
                {!!  Form::select('category_id',$categories,$article->category->id,[
                    'class'=>'form-control',
                    'required',
                    'placeholder'=>'Seleccione ...']) !!}
            </div>
            <div class="col form-group">
                {!! Form::label('content','Contenido') !!}
                {!! Form::textarea('content',$article->content,['class'=>'form-control textarea-content'])!!}
                 {!! Form::text('summary',null,['class'=>'form-control'
                    ,'placeholder'=>'summary','hidden']) !!}
            </div>
            <div class="col form-group">
                {!! Form::label('tags','Tags') !!}
                
                {!! Form::select('tags[]',$tags,$article_tags,['class'=>'form-control','multiple','required']) !!}
            </div>
            
            <div class="col border-top text-center">
                {!! Form::submit('Crear',['class'=>'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}        
    </div>
@endsection