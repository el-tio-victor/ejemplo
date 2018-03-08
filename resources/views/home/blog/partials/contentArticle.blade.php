
@extends('template.main')
@section('content-articles')
    <h2>
        {{  $article->title }}
    </h2>
    <section class="column border">
        <div class="col m-auto card-image border article-cont-image">
            @foreach($article->images as $image)
                <a href="{{route('home.blog.article',$article->slug)}}">
                    <img src="{{asset('images/articles/'.$image->name)}}"
                    alt="{{$article->title.' blog gomez-ste'}}" class='article-image'
                    width="450" height="250">
                </a> 
            @endforeach
        </div>
         <div>
             {{$article->category->name}}
         </div>
         <div>
            @foreach($article->tags as $tag)
                {{$tag->name}}
            @endforeach
         </div>
         <div>
             {!! $article->content!!}
         </div>
    </section>
@endsection