
<div class="align-self-start">
    <ul class="nav">
        <li class='nav-item '>
        <a class="f1-25 nav-link {{ Route::is('home') ? ' active ' : ''}}" href="/">Inicio</a>
        </li>
        <li class='nav-item'>
            
            <a class="f1-25 nav-link {{ Request::is('blog','blog/*') ? ' active ' : ''}} "
             href="/blog">Blog</a>
        </li>
    </ul>
</div>