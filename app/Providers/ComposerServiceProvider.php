<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['home.blog.partials.contentCategories',
            '']
            ,'App\Http\ViewComposers\AsideComposer');

        View::composer(['home.index.partials.contentWorks'],
            'App\Http\ViewComposers\IndexWorksComposer');

        View::composer(['home.index.partials.contentArticles'],
            'App\Http\ViewComposers\IndexArticlesComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
