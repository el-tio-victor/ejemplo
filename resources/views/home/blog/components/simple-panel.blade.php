<h2>Articulos <i class="icon-newspaper color-black"></i></h2>
<section class="col-12 d-flex flex-column-reverse flex-md-row justify-content-around p-4">
    <div class="col-md-8 col-lg-7  d-flex flex-wrap articles-cont ">
        {{$article}}
    </div>
     <aside class="col-md-4 aside-blog">
            @include('home.blog.partials.contentCategories')
    </aside>
</section>