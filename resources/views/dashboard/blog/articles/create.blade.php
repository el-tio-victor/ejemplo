@extends('dashboard.template.main')

@section('title')
    <h3>Nuevo articulo</h3>
@endsection

@section('content')
    <div class="border border-success p-3">
        
         
        {!! Form::open( ['route'=>'articles.store','method'=>'POST','files'=>true] ) !!}
            
            <div class="col d-flex form-group">
                @include('dashboard.template.partials.form',
                    ['tag'=>'text',
                    'name'=>'title',
                    'label'=>'Titulo',
                    'data'=>null,'placeholder'=>'Nombre Articulo','required'=>'required'])
            </div>
            <div class="col d-flex form-group">
                {!!  Form::label('category_id','Categoria',['class'=>'col text-right']) !!}
                <div class="col-8">
                    {!!  Form::select('category_id',$categories,null,[
                    'class'=>'form-control',
                    'required',
                    'placeholder'=>'Seleccione ...']) !!}
                </div>
                
            </div>
            <div style='width:35rem;' class="    form-group">
                {!! Form::label('content','Contenido',['class'=>'col text-left']) !!}
                <div class="col-12">
                    {!! Form::textarea('content',null,['class'=>'form-control textarea-content'])!!}
                </div>
                
            </div>
            <div class="col d-flex  form-group">
                {!! Form::label('tags','Tags') !!}
                <div class="col-8">
                    {!! Form::select('tags[]',$tags,null,['class'=>'form-control','multiple']) !!}
                </div>
                
            </div>
            <div class="col d-flex form-group">
                {!! Form::label('image','Imagen') !!}
                <div class="col-8">
                    {!!  Form::file('image') !!}
                </div>
                
            </div>
            <div class="col border-top text-center">
                {!! Form::submit('Crear',['class'=>'btn btn-success']) !!}
            </div>
        {!! Form::close() !!}        
    </div>
@endsection