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
            'company' => new CompanyResource($this->whenLoaded('company')),
            'link' => $this->link,
            'type' => $this->type,
            'status' => $this->status,
            'link_repo' => $this->link_repo,
            'color' => $this->color,
            'description' => $this->description,
            'image' => new ImageResource($this->whenLoaded('image')),
        ];
    }
}
