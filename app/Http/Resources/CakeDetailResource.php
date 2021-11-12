<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CakeDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $order_item = $this->whenLoaded('order_item');
        $cake = $this->whenLoaded('cake');
        return [
            'id' =>$this->id,
            'flavor' => $this->flavor,
            'quantity' => $this->quantity,
            'cake' => new Cake($this->cake),
            'order_item' => new OrderItemResource($this->order_item)
        ];
    }
}
