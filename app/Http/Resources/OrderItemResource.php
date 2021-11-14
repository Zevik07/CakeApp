<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
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
        return 
        [
            'quantity' => $this->quantity,
            'price' => $this->quantity,
            'note' => $this->note,
            'order' => new OrderResource($this->order),
            'cake_details' => CakeDetailResource::collection($this->whenLoaded('cake_details'))
        ];
    }
}
