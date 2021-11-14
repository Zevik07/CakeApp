<?php

namespace App\Http\Resources;
use App\Models\Images;

use Illuminate\Http\Resources\Json\JsonResource;

class Cake extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $order = $this->whenLoaded('order');
        return [
            'id' => $this->id,
            'name' => $this->name,
            'desc' => $this->desc,
            'price' => $this->price,
            'quantity' => $this->cake_details()->count(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'cake_details' => $this->cake_details,
            'imgs' => $this->images,
            'thumb' => $this->images()->first(),
        ];
    }
}
