<?php

namespace App\Providers;

use App\Post;
use App\Stripe;
use App\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        view()->composer('layout.footer', function($view) {
            $view->with('archives', Post::archives());
            $view->with('tags', Tag::has('posts')->select(['name'])->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
        app()->singleton(Stripe::class, function () {
            return new Stripe('Hello Hung');
        });

    }
}
