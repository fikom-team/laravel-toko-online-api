<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'user_id'      => $this->user_id,
            'phone_number' => $this->phone_number,
            'postal_code'  => $this->postal_code,
            'avatar'       => [
                'tiny'   => $this->getFirstMediaUrl('profile-avatar', 'tiny'),
                'small'  => $this->getFirstMediaUrl('profile-avatar', 'small'),
                'medium' => $this->getFirstMediaUrl('profile-avatar', 'medium'),
                'large'  => $this->getFirstMediaUrl('profile-avatar', 'large'),
            ]
        ];
    }
}
