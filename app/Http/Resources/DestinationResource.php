<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DestinationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'duration' => $this->duration,
            'duration_type' => $this->duration_type,
            'destination' => $this->destination,
            'description' => $this->description,
            'price' => $this->price,
            'images' => $this->images,
            'is_available' => $this->is_available
        ];
    }
}
