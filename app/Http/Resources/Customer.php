<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Customer extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        // return [

        //     'firstname' => $this->firstname,
        //     'lastname' => $this->lastname,
        //     'email' => $this->email,
        //     'age' => $this->age
        // ];
    }

    public function with($request)
    {
        
        return [
            'version' => '1.0.0',
            'author_url' => url('https://github.com/neiljamestony')
        ];
    }
}
