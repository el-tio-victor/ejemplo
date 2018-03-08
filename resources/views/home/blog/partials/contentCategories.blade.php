<strong><i class="icon-books f1-75"></i>Categorias</strong>
<div class="border m-1 p-1 aside-categories">
    <ul>
        @foreach($categories as $category)
        <a href="{{ route( 'home.search.category',$category->id ) }}">
            <span class='badge badge-primary'>
                 {{$category->name}} &nbsp;&nbsp; {{$category->articles->count()}} 
            </span>
        </a>     
        @endforeach
    </ul>
</div>
<strong><i class="icon-price-tag f1-5"></i>Tags</strong>
<div class="m-1 p-1 border aside-tags">
    <ul>
        @foreach($tags as $tag)
            <a href=" {{ route( 'home.search.tag',$tag->id ) }} ">
                <span class='badge badge-secondary'> {{$tag->name}} </span>
            </a>
        @endforeach
    </ul>
        

</div>