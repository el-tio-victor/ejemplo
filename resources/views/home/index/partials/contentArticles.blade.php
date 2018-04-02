<div class="d-flex flex-column flex-md-row justify-content-around sc-trigger article-wrapper ">
    @component('home.blog.components.article',['articles'=>$articles])
    
    @endcomponent
</div>
<div class=' row  articles-link'>
    <a class='m-auto' href=" {{route('blog')}} ">
         <span class="p-1  f1-25  bg-o btn">
            Ver Mas Posts <i class="transition icon-arrow-right2"> </i>
        </span>
    </a>
   
</div>


