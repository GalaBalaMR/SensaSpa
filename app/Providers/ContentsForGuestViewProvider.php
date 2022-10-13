<?php

namespace App\Providers;

use App\Models\Content;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ContentsForGuestViewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.guest', function ($view) {
            $contents = Content::where('name' , 'hero')->get();
            $view->with('contents', Content::where('name' , 'hero')->get());
        });
    }
}
