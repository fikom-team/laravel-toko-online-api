<?php

use App\Contracts\ProductsContracts;

if (!function_exists('product')){
    function product() {
        return app(ProductsContracts::class);
    }
}
