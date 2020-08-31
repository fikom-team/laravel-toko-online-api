<?php

namespace App\Providers;

use App\Contracts\ProductsContracts;
use App\Repostory\Products;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    public $singletons = [
        ProductsContracts::class => Products::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(ProductsContracts::class , Products::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
