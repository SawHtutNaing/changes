<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VouncherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return $this->vouncher;
        return [
            'vouncher_data' => parent::toArray($request),
            'children_vounchers' => $this->children_vounchers


        ];
    }
}
