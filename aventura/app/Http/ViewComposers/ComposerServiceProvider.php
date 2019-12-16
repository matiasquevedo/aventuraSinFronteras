<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Mensaje;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('admin.index', function ($view) {
            //
            $mensajes = Mensaje::all();
            $view->with("mensajes",$mensajes);
        });

        view()->composer('nav', function ($view) {
            //
            $categories = Category::has('actividades','>',0)->get();
            $view->with("categories",$categories);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}