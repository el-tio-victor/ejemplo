<h2>Articulos </h2>
<section class="col-12 d-flex flex-column-reverse flex-md-row justify-content-center wrapper-blog">
    <div class="col-md-8 col-lg-7   gh ">
        <div class="d-flex justify-content-center flex-wrap articles-cont">
            {{$article}}
        </div>
        <div>
            {{$paginate}}
        </div> 
    </div>
     <aside class="col-md-4 aside-blog">
         <div class="aside-blog-wrapper">
            @include('home.blog.partials.contentCategories')
            <p class="p-1 m-1 f1 bg-o">De todo un pococontenido en este lugar.  </p>
         </div>
        
    </aside>
</section>