
<div class="align-self-start border-right">
    <ul class="nav">
        <li class='nav-item '>
        <a class="f1-25 nav-link {{ Route::is('home') ? ' active ' : ''}}" href="/">Inicio</a>
        </li>
        <li class='nav-item'>
            
            <a class="f1-25 nav-link{{ Route::is('blog') || Route::is('blog.article') ? ' active ' : ''}} " href="/blog">Blog</a>
        </li>
    </ul>
</div>