<h2>{{$prueba->title}} </h2>
<p>{{$prueba->content}} </p>
<span>Usuario: {{$prueba->user->name}} | </span>
<span>Categoria: {{$prueba->category->name}}</span>

@foreach($prueba->tags as $tag)
 <p> Tags: {{$tag->name}} </p>
@endforeach