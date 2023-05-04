<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class ApartmentSearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
//            'type' => $this->apartment_type?->name,
            'type' => $this->apartment_type? $this->apartment_type->name : '',
            'size' => $this->size,
            'beds_list' => '', // coming soon
            'bathrooms' => $this->bathrooms,
        ];
    }
}
