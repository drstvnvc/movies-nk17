<?php

namespace App\Providers;

use App\Models\Movie;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // select * from from movies order by created_at desc limit 5;
        $latestMovies = Movie::orderBy('id', 'desc')->limit(5)->get();
        View::share('latestMovies', $latestMovies);
    }
}
