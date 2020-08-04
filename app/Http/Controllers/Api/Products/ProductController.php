<?php

namespace App\Http\Controllers\Api\Products;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Repostory\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get All Products
     * @param  App\Repostory\Products;
     * @return App\Http\Resource\ProductsResource;
     */
    public function index(Products $product)
    {
        if (!$product) {
            return response()->json([
                'message' => 'oops',
            ]);
        }
        return ProductResource::collection($product->all());
    }

    /**
     * Show Products
     *
     * @param int $id,
     * @return App\Http\Resource\Products
     */
    public function show($id)
    {
        $products = new Products();
        return new ProductResource($products->show($id));
    }
}
