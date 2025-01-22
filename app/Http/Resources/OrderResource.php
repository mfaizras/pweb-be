<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'uuid' => $this->uuid,
            'trx_id' => $this->trx_id,
            'amount' => $this->amount,
            'total' => $this->total,
            'status' => $this->status,
            'destination' => $this->destination->makeHidden(['description']),
            'customer' => $this->user,
            'payment_method' => $this->payment,
            'created_at' => $this->created_at,
        ];
    }
}
