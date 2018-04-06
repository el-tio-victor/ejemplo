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
                           {{$work->url}}
                        </td>
                        <td>
                            <a href=" {{route('works.destroy',$work->id)}} ">
                                <div><span class="btn btn-danger"><span class="icon-cross"></span></span></div>
                            </a>
                            <a href="{{route('works.edit',$work->id)}}">
                                <div>
                                    <span class="btn btn-warning">
                                        <i class="icon-font"></i>
                                    </span>
                                </div>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent
    </div>
    {!! $works->render() !!}
@endsection