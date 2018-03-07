@extends('dashboard.template.main')

@section('title')
    <h2>Agregar Categoria</h2>
@endsection

@section('content')
    <div class="p-3 border">
        {!! Form::open( ['route'=>'categories.store','method'=>'POST'] ) !!}
            <div class="col d-flex form-group">
                @include('dashboard.template.partials.form',[
                    'tag'=>'text',
                    'data'=>null,
                    'name'=>'name',
                    'required'=>'required',
                    'placeholder'=>'Nombre categoria',
                    'label'=>'Nombre'
                ])
                @if( count($errors->get('name'))> 0 )
                    <span class="msg alert-danger">
                        @foreach ($errors->get('name') as $message) 
                                {{ $message }} 
                        @endforeach
                    </span>
                @endif
            </div>
            <div class="col border-top pt-3 form-group text-center">
                {!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
            </div>
        {!! Form::close() !!}
    </div>
    

@endsection