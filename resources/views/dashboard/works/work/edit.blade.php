@extends('dashboard.template.main')

@section('title')
    <h3 class='text-center'>Editar Trabajo</h3>
@endsection

@section('content')
    <div class="p-3  cont-form">
        {!!Form::open(['route'=>['works.update',$work],'method'=>'PUT'])!!}
            <div class="form-group d-flex">
                {!!Form::label('title','Titulo',['class'=>'text-right col'])!!}
                <div class="col-8">
                    {!!Form::text('title',$work->title,['
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
                    {!!Form::text('services',$work->services,['
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
                    {!!Form::textarea('detail',$work->detail ,['
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
                    {!!Form::textarea('url',$work->url ,['
                        placeholder'=>'descripción del trabajo del trabajo',
                        'class'=>'form-control'])!!}
                    @if ($errors->has('detail'))
                        <span class="help-block">
                            {{ $errors->first('detail') }}
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