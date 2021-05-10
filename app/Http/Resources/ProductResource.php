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
            'id'=> 'Id du produit est le : '. $this->id,
            'description'=> substr($this->desc, 0, 12)  .'...',
            'category'=>$this->category
        ];
    }
}
