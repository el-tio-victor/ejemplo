@extends('template.main')
@section('content-articles')
    <h2><strong>Articulos</strong></h2>
    <section class="d-flex flex-wrap">
        @foreach($articles as $article)
        <article class="col-lg-6 border-bottom mb-4 article">
            <div class="col m-auto card-image border articles-cont-image">
                 @foreach($article->images as $image)
                    <a href="{{route('home.blog.article',$article->slug)}}">
                        <img src="{{asset('images/articles/'.$image->name)}}"
                        alt="{{$article->title.' blog gomez-ste'}}" class='article-image'
                        width="450" height="250">
                    </a> 
                @endforeach
            </div>
            <h3> {{$article->title}} </h3>

            <p> {!!$article->summary!!} </p>
            <footer class="row  border-top">
                <div class=" col-12 col-md-8 col-lg-6 m-lg-1  article-category-tag">
                    <div class=''>
                        <a href="">
                            <span class="badge badge-primary">
                                <i class="icon-books f-75"></i>
                                {{$article->category->name}}
                            </span>
                        </a>
                    </div>
                    @foreach($article->tags as $tag)
                        <span class="badge badge-secondary">
                            <i class="icon-price-tags"></i>
                                {{$tag->name}}         
                        </span>
                    @endforeach
                </div>
                
                <span class="d-flex align-items-center badge badge-light ">
                   <i class="icon-clock"> </i>{{$article->created_at->diffForHumans()}}
                </span>
            </footer>
        </article>
    @endforeach
    </section>  
    
@endsection