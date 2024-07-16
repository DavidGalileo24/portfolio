<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'type' => $this->type,
            'company' => new CompanyResource($this->whenLoaded('company')),
            'status' => $this->status,
            'description' => $this->description,
            'screenshot' => new ImageResource($this->whenLoaded('image')),
            'link' => new LinkResource($this->whenLoaded('link')),
        ];
    }
}
