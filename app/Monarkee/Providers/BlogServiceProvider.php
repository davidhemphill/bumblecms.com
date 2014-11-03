<?php namespace Monarkee\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{

    public function register()
    {
//        $this->app['view']->composer('themes.includes.header', 'Monarkee\Composers\LayoutComposer');
        $this->app['view']->composer('docs.partials.sidebar', 'Monarkee\Composers\DocsSidebarComposer');
    }
}
