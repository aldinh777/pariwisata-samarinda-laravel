<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {

    protected function isEnabled($value) {
        return $this->when($value !== null, $value);
    }    

    protected function diffForHumans($value) {
        if(!$value) {
            return null;
        }
        return $value->diffForHumans();
    }

    public function toArray($request) {
		return [
            'email'          => $this->isEnabled($this->email),
			'name' 		     => $this->isEnabled($this->name),

			'created_at' 	 => $this->isEnabled($this->diffForHumans($this->created_at)),
			'updated_at' 	 => $this->isEnabled($this->diffForHumans($this->updated_at)),

			// 'csrf_token' 	 => \JWTAuth::payload()->get('csrf-token'),
		];
	}
}
