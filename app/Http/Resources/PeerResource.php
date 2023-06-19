<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PeerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'First Name' => $this->first_name,
            'Last Name' => $this->last_name,
            'Date of Birth' => $this->birth_date,
            'Address' => $this->address,
            'Gender' => $this->gender
        ];
    }
}
