@extends('dashboard.template.main')

@section('title')
    <h2>Tags</h2>
@endsection

@section('content')
<div class="p-3 border">
    {!!Form::open(['route'=>'tags.store', 'method'=>'POST' ])!!}
        <div class="col d-flex form-group">
            {!! Form::label('name','Nombre',['class'=>'col text-right'])!!}
            <div class="col-8">
                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del Tag','required'])!!} @if( count($errors->get('name'))
                > 0 )
                <span class="msg alert-danger">
                            @foreach ($errors->get('name') as $message) 
                            {{ $message }} 
                            @endforeach
                        </span> @endif
            </div>
        </div>
        
        <div class="col border-top form-group text-center">
            {!! Form::submit('Enviar',['class'=>'btn btn-success'])!!}
        </div>
    {!!Form::close()!!}
</div>
    

@endsection