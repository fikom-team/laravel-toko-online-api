<?php

namespace App\Repostory;

use App\Contracts\ProductsContracts;
use App\Product;
use Illuminate\Pagination\LengthAwarePaginator;


class Products implements ProductsContracts
{

    public function all(): LengthAwarePaginator
    {
        return Product::paginate();
    }

    public function show($id)
    {
        return Product::with('user')->find($id);
    }

    public function create(array $products): Product
    {
        return Product::create($products);
    }

}
