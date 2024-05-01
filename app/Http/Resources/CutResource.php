<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CutResource extends JsonResource
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
            'barcodeCut'=>$this->barcodeCut,
            'width'=>$this->width,
        ];
    }
}
