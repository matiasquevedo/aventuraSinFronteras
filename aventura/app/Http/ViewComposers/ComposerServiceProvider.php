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

        view()->composer('admin.template.partials.nav', function ($view) {
            //
            $mensajes = Mensaje::where('state','=','0')->count();
            $view->with("mensajes",$mensajes);
        });

        view()->composer('nav', function ($view) {
            //
            $categories = Category::all();
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