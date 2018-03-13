<?php
    // Home
    Breadcrumbs::register('blog', function ($breadcrumbs) {
    $breadcrumbs->push('Blog', route('home.blog.partials.contentArticles'));
});
?>