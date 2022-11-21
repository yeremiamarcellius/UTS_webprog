<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        //
        FacadesView::share('categories', Category::all());
    }
}
