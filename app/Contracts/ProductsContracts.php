<?php

namespace App\Contracts;

use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductsContracts
{
    /**
     * Get All Products
     * @return LengthAwarePaginator
     */
    public function all() : LengthAwarePaginator;

    /**
     * Showing Products
     *
     * @param int $id
     */
    public function show(int $id);

    /**
     * Save Products To Database
     *
     * @param array $products
     * @return Product
     */
    public function create(array $products) : Product ;
}
