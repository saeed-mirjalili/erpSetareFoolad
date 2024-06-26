<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RollResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'barcodeRoll'=>$this->barcodeRoll,
            'source'=>$this->source,
            'weight'=>$this->weight,
            'cuts'=> CutResource::collection($this->whenLoaded('cut')),
        ];
    }
}
