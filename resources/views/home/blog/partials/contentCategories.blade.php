<strong class='color-black'><i class="icon-books f1-75"></i>Categorias</strong>
<div class="m-1 p-1 border-bottom  aside-categories">
    <ul>
        @foreach($categories as $category)
        <a href="{{ route( 'blog.search.category',$category->id ) }}">
            <span class='badge badge-category'>
                 {{$category->name}} &nbsp;&nbsp; {{$category->articles->count()}} 
            </span>
        </a>     
        @endforeach
    </ul>
</div>
<strong class='color-black'><i class="icon-price-tag f1-5"></i>Tags</strong>
<div class="m-1 p-1 border-bottom aside-tags">
    <ul>
        @foreach($tags as $tag)
            <a href=" {{ route( 'blog.search.tag',$tag->id ) }} ">
                <span class='badge badge-secondary'> {{$tag->name}} </span>
            </a>
        @endforeach
    </ul>
        

</div>