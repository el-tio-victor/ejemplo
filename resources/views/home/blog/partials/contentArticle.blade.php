
@extends('template.main')
@component('home.partials.header')

@endcomponent
@section('content')
    
    @component('home.blog.components.simple-panel')
        @slot('article')
            <article class="col-lg-12  mb-4 article">
                <h3>{{$article->title}}</h3>
                <span class="badge m-1 m-md-3 badge-category">
                    <i class="icon-books"></i>
                    {{$article->category->name}}
                </span>
                <div class="col m-auto card-image  article-cont-image">
                    @foreach($article->images as $image)
                        
                            <img src="{{asset('images/articles/'.$image->name)}}"
                            alt="{{$article->title.' blog gomez-ste'}}" class='article-image'
                            width="450" height="250">
                        
                    @endforeach               
                </div>
                <div class="content">
                    <p>{!!$article->content!!}</p>
                </div>
                <footer>
                    @foreach($article->tags as $tag)
                        <span class="badge badge-secondary">
                            <i class="icon-price-tag"></i>
                            {{$tag->name}}
                        </span>
                    @endforeach
                </footer>
            </article>
        @endslot
    
    @endcomponent
@endsection