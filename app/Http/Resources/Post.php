<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource
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
            'type' => 'Post',
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'comment' => Comment::collection($this->comments),
            ],
        ];
    }
    // public function with($request)
    // {
    //     return [
    //         'version' => '1.0.0',
    //         'api_url' => url('http://lpgvue/api'),
    //     ];
    // }
}
