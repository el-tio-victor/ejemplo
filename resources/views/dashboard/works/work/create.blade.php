@extends('dashboard.template.main')

@section('title')
    <h3>Agregar nuevo trabajo</h3>
@endsection

@section('content')
    <div class="p-3  cont-form">
        {!!Form::open(['route'=>'works.store','method'=>'post','files'=>true])!!}
            <div class="form-group d-flex">
                {!!Form::label('title','Titulo',['class'=>'text-right col'])!!}
                <div class="col-8">
                    {!!Form::text('title',null,['
                        placeholder'=>'Titulo de Trabajo',
                        'class'=>'form-control'])!!}
                    @if ($errors->has('title'))
                        <span class="help-block">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group d-flex">
                {!!Form::label('services','Servicios',['class'=>'text-right col'])!!}
                <div class="col-8">
                    {!!Form::text('services',null,['
                        placeholder'=>'Servicios del trabajo',
                        'class'=>'form-control'])!!}
                    @if ($errors->has('services'))
                        <span class="help-block">
                            {{ $errors->first('services') }}
                        </span>
                    @endif
                </div>
               
            </div>
            <div class="form-group d-flex">
                {!!Form::label('detail','Descripción',['class'=>'text-right col'])!!}
                <div class="col-8">
                    {!!Form::textarea('detail',null,['
                        placeholder'=>'descripción del trabajo del trabajo',
                        'class'=>'form-control'])!!}
                    @if ($errors->has('detail'))
                        <span class="help-block">
                            {{ $errors->first('detail') }}
                        </span>
                    @endif
                </div>
                
            </div>
            <div class="form-group d-flex">
                {!!Form::label('url','Url',['class'=>'text-right col'])!!}
                <div class="col-8">
                    {!!Form::textarea('url',null,['
                        placeholder'=>'Url opcional',
                        'class'=>'form-control'])!!}
                    @if ($errors->has('detail'))
                        <span class="help-block">
                            {{ $errors->first('detail') }}
                        </span>
                    @endif
                </div>
                
            </div>
            <div class=" d-flex form-group">
                {!! Form::label('img','Imagen',['class'=>'text-right col']) !!}
                <div class="col-8">
                    {!!  Form::file('img') !!}
                    @if ($errors->has('img'))
                        <span class="help-block">
                            {{ $errors->first('img') }}
                        </span>
                    @endif
                </div>
                
            </div>
            
    </div> 
    <div class="col border-top text-center p-1  footer-form">
        {!! Form::submit('Crear',['class'=>'btn btn-success']) !!}
    </div>      
        {!!Form::close()!!}
    
@endsection