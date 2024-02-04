<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TechnologyResource extends JsonResource
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
            'percentaje' => $this->percentaje,
            'type' => $this->type,
            'image' => new ImageResource($this->whenLoaded('image')),
            'services' => ServiceResource::collection($this->whenLoaded('services')),
        ];
    }
}
