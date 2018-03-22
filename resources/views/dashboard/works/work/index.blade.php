@extends('dashboard.template.main')

@section('title')
    <h3 class='text-center'>Mis ultimos trabajos</h3>
    <a href=" {{route('works.create')}} ">
        <span class="btn btn-success">Nuevo</span>
    </a>
    
@endsection

@section('content')
    <div class="col ">
        @component('dashboard.template.components.table')
            @slot('thead')
                <th>#</th>
                <th>Titulo</th>
                <th>Servicios</th>
                <th>Detalle</th>
                <th>Enlace</th>
                <th>...</th>
            @endslot

            @slot('tbody')
                @foreach($works as $work)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$work->title}} </td>
                        <td>{{$work->services}}</td>
                        <td>{{$work->detail}}</td>
                        <td>
                            <span>Por Añadir</span>
                        </td>
                        <td>
                            <div><span class="btn btn-danger"><span class="icon-cross"></span></span></div>
                            <div><span class="btn btn-warning"><span class="icon-font"></span></span></div>
                        </td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent
    </div>
    {!! $works->render() !!}
@endsection