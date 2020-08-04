<?php

namespace App\Repostory;

use App\Contracts\ProductsContracts;
use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
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

    public function add(): void
    {
    }
}
