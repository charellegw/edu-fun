<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; // wajib untuk View::composer
use App\Models\Category; // <-- tambahkan ini

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Share semua kategori ke semua view (navbar)
        View::composer('*', function ($view) {
            $view->with('allCategories', Category::all());
        });
    }
}
