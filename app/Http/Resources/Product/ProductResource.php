<?php

namespace App\Http\Resources\Product;

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
            'SKU' => $this->discount,
            'name' => $this->name,
            'image' => $this->image,
            'description' => $this->detail,
             
            'details' => [
                'price' => $this->price,
                'quantity' => $this->stock, 
            ] 
            ];
    }
}
