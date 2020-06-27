<?php

namespace App\Http\Resources\FormResource;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticularCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'value' => $this->id,
            'label' => $this->category_name
        ];
    }
}
