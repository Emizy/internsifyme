<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InternResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
        'id' => $this->id,
        'title' => $this->title,
        'bio' => $this->bio,
        'verify' => $this->verify,
        'certify' => $this->certify,
        'banner' => $this->banner,
        'skills' => $this->skills,
        'experience' => $this->experience,
        'education' => $this->education,
        'education_level' => $this->education_level,
        'cv' => $this->cv,
        'portfolio' => $this->portfolio,
        'language' => $this->language,
        'stipend' => $this->stipend,
        'availability' => $this->availability,
        'country' => $this->country,
        'state' => $this->state,
        'city' => $this->city,
        'zip_code' => $this->zip_code,
        'website' => $this->website,
        'facebook' => $this->facebook,
        'instagram' => $this->instagram,
        'twitter' => $this->twitter,
        'linkedin' => $this->linkedin,
        'created_at' => $this->created_at->format('d/m/Y'),
        'updated_at' => $this->updated_at->format('d/m/Y'),
    ];
    }
}
