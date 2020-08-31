<?php

namespace App\Http\Controllers\Api\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Repostory\Products;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProductController extends Controller
{
    /**
     * Get All Products
     * @param Products $product
     * @return AnonymousResourceCollection
     */
    public function index(Products $product)
    {
        return ProductResource::collection($product->all());
    }

    /**
     * Show Products
     *
     * @param int $id,
     * @return ProductResource
     */
    public function show($id)
    {
        $products = new Products();
        return new ProductResource($products->show($id));
    }
}
