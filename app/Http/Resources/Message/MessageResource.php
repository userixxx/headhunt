<?php

namespace App\Http\Resources\Message;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
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
            'body' => $this->body,
            'sender_id' => $this->sender_id,
            'sms_type' => $this->sms_type,
            'time' => $this->created_at ? $this->created_at->diffForHumans() : null,
        ];
    }
}
