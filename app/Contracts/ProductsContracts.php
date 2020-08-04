<?php

namespace App\Contracts;

use App\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface ProductsContracts
{
    /**
     * Add a Products
     *
     * @return void
     */
    public function add(): void;

    /**
     * Get All Products
     *
     * @return App\Products
     */
    public function all() : LengthAwarePaginator;

    /**
     * Showing Products
     *
     * @param int $id
     */
    public function show(int $id);
}
