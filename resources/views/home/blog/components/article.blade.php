
@foreach($articles as $article)

    <article class="col-12 col-md-6 col-lg-4 transition-x
        sc-anim {{ (($loop->iteration/2) == 1 ) ? '' : 'delay-xx'}}  mb-md-4 card article">
       <div class=' card-image-cont'>
            <a href="{{route('blog.article',$article->slug)}}">
                <img src="{{asset('images/articles/'.$article->image_name)}}"
                alt="{{$article->title.' blog gomez-site'}}" class='card-image-top'
                width="450" height="250">
            </a> 
        </div>
        <div class="article-ribbon">
            <a href="">
                <span class="badge badge-category">
                    <i class="icon-books f-75"></i>
                    {{$article->category_name}}
                 </span>
            </a>         
        </div>
        <h3> {{$article->title}} </h3>
        <p> {!!$article->summary!!} </p>
        <a href="{{route('blog.article',$article->slug)}}">
            <span class='article-more-link'>
                 Ver Mas
                <i class="transition icon-arrow-right2"> </i>
            </span>
        </a>  
    </article>
@endforeach