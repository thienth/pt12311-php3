<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; 

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
        
        // View::share('supersayan', $name);
        // View::composer(['welcome', 'post.form'], function ($view) {
        //     $name = 'Kakalot';
        //     return $view->with('supersayan', $name);
        // });
        // View::composer(
        //     'homepage', 'App\Http\ViewComposers\HomepageComposer'
        // );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
