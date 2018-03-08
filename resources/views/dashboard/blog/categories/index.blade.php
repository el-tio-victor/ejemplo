@extends('dashboard.template.main')

@section('title')
<h2>Lista de Categorias</h2>
@endsection


@section('content')
    <a href=" {{route('categories.create')}} " class='btn btn-info'>Agregar Categoria</a>
    <div class="col-6">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$category->name}}</td> 
                        <td>
                            <a class='btn btn-danger' role='button' href=" {{route('dashboard.categories.destroy',$category->id)}} "> x </a>
                            <a class='btn btn-warning' href=" {{route('categories.edit',$category->id)}} ">e</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            {!! $categories->render() !!}
        </nav>
        
    </div>
    
    
@endsection