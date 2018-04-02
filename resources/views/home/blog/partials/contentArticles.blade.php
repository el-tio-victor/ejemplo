@extends('template.main')

@section('header')
    @component('home.partials.header')
        <h1>Blog</h1>
    @endcomponent
@endsection

@section('content')
   
    @component('home.blog.components.simple-panel')
        @slot('article')
                @foreach($articles as $article)
                    <article class="col-10 col-sm-6   card article">
                        <div class=' card-image-cont'>
                            @foreach($article->images as $image)
                                <a href="{{route('blog.article',$article->slug)}}">
                                    <img src="{{asset('images/articles/'.$image->name)}}"
                                    alt="{{$article->title.' blog gomez-ste'}}" class='card-image-top'
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
                        <span>
                            <i class="icon-clock"></i>&nbsp;{{$article->created_at->diffForHumans()}}
                        </span>
                        <div class="article-text">
                            <p> {!!$article->summary!!} </p>
                        </div>
                        <a href="{{route('blog.article',$article->slug)}}">
                            <span class='article-more-link'>
                                Ver Mas
                                <i class="transition icon-arrow-right2"> </i>
                            </span>
                        </a>
                        <footer class="row  ">        
                            <span class="d-flex align-items-center badge badge-light ">
                            
                            </span>
                        </footer>
                    </article>
                     
                @endforeach
                
        @endslot
        @slot('paginate')
            <nav aria-label="navigation border border-success ">
                    {{ $articles->links() }}
            </nav>
        @endslot
    @endcomponent
@endsection

@section('js')
    <script src=" {{asset('js/scenesHeaderScrollMagic.js')}} "></script>
    <script>
        if($(window).width() > 768){
            var c = new ScrollMagic.Controller()
            var pinAsideScene = new ScrollMagic.Scene({
                triggerElement: 'main',
                triggerHook: 0
            })
            .setPin('.aside-blog-wrapper',{pushFollowers:false})
            .addTo(c)
            }
    </script>
    
@endsection

@section('footer')
    @include('template.partials.footer')
@endsection