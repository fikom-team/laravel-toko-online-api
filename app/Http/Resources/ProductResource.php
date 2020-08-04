<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'             => $this->id,
            'name'           => $this->name,
            'unit_weight'    => $this->unit_weight,
            'unit_in_stock'  => $this->unit_in_stock,
            'unit_price'     => $this->unit_price,
            'quantity_price' => $this->quantity_price,
            'formatted_price'=> number_format($this->unit_price , 2),
            'desc'           => $this->desc,
            'user'           => UserResource::make($this->user),
        ];
    }
}
