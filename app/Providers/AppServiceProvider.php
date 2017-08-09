<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Tovar_category;
use App\Service_category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $categories = Tovar_category::with('tovar_podcategories.tovars')->get();
        $category_serv = Service_category::with('services')->get();
        view()->share('categories', $categories);
        view()->share('category_serv', $category_serv);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
