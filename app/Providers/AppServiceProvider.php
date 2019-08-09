<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Menu;


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
        //
        \View::share([
            'newss' => \App\News::all(),
            'menus' => Menu::where('parent_id', 0)->get(),
            'setting' => \App\Setting::first(),
        ]);
    }
}
