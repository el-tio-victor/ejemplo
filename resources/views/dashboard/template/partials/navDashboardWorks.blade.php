@if(Auth::user()->admin())
    <div class=" panel-menu-btn">
    <a class="nav-link {{ Request::is('dashboard/works','dashboard/works/*') ? ' active ' : ''}}" href="{{route('works.index')}}">
            <i class="icon-user"></i>Trabajos
    </a>    
    </div>
@endif