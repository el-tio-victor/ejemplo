

@if(Auth::user()->admin())
    <div class=" panel-menu-btn">
        <a class="nav-link {{ Request::is('dashboard/users','dashboard/users/*') ? ' active ' : ''}}" href="{{ route('users.index')}}">
            <i class="icon-user"></i>Usuarios
        </a>    
    </div>
@endif
<div class=" panel-menu-btn">
    <a class="nav-link {{ Request::is('dashboard/articles','dashboard/articles/*') ? ' active ' : ''}}"
         href=" {{route('articles.index')}} ">
        <i class="icon-newspaper"></i>Atriculos
    </a>
</div>
<div class=" panel-menu-btn">
    <a class="nav-link {{ Request::is('dashboard/tags','dashboard/tags/*') ? ' active ' : ''}}"
        href=" {{route('tags.index')}} ">
        <i class="icon-price-tag"></i>Tags
    </a>
</div>
<div class=" panel-menu-btn">
    <a class="nav-link {{ Request::is('dashboard/categories','dashboard/categories/*') ? ' active ' : ''}}" href=" {{ route('categories.index')}} ">
        <i class="icon-books"></i>Categorias
    </a>
</div>
<div class=" panel-menu-btn">
    <a class="nav-link {{ Request::is('dashboard/images','dashboard/images/*') ? ' active ' : ''}}" href=" {{route('images.index')}} ">
        <i class="icon-image"></i>Imágenes
    </a>
</div>
