

@if(Auth::user()->admin())
    <div class=" panel-menu-btn">
        <a class="nav-link" href="{{ route('users.index')}}">
            <i class="icon-user"></i>Usuarios
        </a>    
    </div>
@endif
<div class=" panel-menu-btn">
    <a class="nav-link" href=" {{route('articles.index')}} ">
        <i class="icon-newspaper"></i>Atriculos
    </a>
</div>
<div class=" panel-menu-btn">
    <a class="nav-link" href=" {{route('tags.index')}} ">
        <i class="icon-price-tag"></i>Tags
    </a>
</div>
<div class=" panel-menu-btn">
    <a class="nav-link" href=" {{ route('categories.index')}} ">
        <i class="icon-books"></i>Categorias
    </a>
</div>
<div class=" panel-menu-btn">
    <a class="nav-link" href=" {{route('images.index')}} ">
        <i class="icon-image"></i>Imágenes
    </a>
</div>
<div>
    <div class="navbar-header">
        <span class=" collapsed" data-toggle="collapse" data-target="#app-navbar" 
            aria-expanded="false">
            prueba
        </span>
    </div>
    <div class="collapse navbar-collapse show" id="app-navbar">
    
                <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <div>1</div>
            <div>1</div>
            <div>1</div>
        </ul>
    </div>
</div>