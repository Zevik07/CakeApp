<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user = $this->whenLoaded('user');
        return 
        [
            'id' => $this->id,
            'notes' => $this->notes,
            'status' => $this->status,
            'user' => new UserResource($this->user),
            'order_items' => OrderItemResource::collection($this->whenLoaded('order_items'))
        ];
    }
}
