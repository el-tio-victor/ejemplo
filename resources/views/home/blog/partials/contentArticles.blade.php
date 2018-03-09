@extends('template.main')
@section('content')
    @component('home.blog.components.simple-panel')
        @slot('article')
                @foreach($articles as $article)
                    <article class="col-10 col-sm-6 m-auto mb-md-4 article">
                        <div class="col m-auto card-image  articles-cont-image">
                            @foreach($article->images as $image)
                                <a href="{{route('home.blog.article',$article->slug)}}">
                                    <img src="{{asset('images/articles/'.$image->name)}}"
                                    alt="{{$article->title.' blog gomez-ste'}}" class='article-image'
                                    width="450" height="250">
                                </a> 
                            @endforeach
                        </div>
                        <div class="article-ribbon">
                             <a href="">
                                <span class="badge badge-category">
                                    <i class="icon-books f-75"></i>
                                    {{$article->category->name}}
                                </span>
                            </a>
                        </div>
                        <h3> {{$article->title}} </h3>

                        <p> {!!$article->summary!!} </p>
                        <footer class="row  ">        
                            <span class="d-flex align-items-center badge badge-light ">
                            <i class="icon-clock"> </i>{{$article->created_at->diffForHumans()}}
                            </span>
                        </footer>
                    </article>
                @endforeach
        @endslot
    @endcomponent

      
    
@endsection