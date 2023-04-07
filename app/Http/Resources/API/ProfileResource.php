<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Hashids\Hashids;

class ProfileResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    $hashids = new Hashids('user-helper', 20);

    return [
      'id' => $hashids->encode($this->id),
      'firstnames' => $this->firstnames,
      'lastnames' => $this->lastnames,
      'main_phone' => $this->main_phone,
      'mobile_phone' => $this->mobile_phone,
      'birthdate' => $this->birthdate ? date('d/m/Y', strtotime($this->birthdate)) : null,
      'work_phone' => $this->work_phone,
      'optional_phone' => $this->optional_phone,
      'address' => $this->address,
      'email' => $this->email,
      'doc' => $this->doc,
      'dependency' => $this->dependency,
      'city' => $this->city_id ? $this->city->name : null,
      'state' => $this->state_id ? $this->state->name : null,
      'country' => $this->country_id ? $this->country->name : null,
      'gender' => $this->gender == 1 ? 'M' : 'F',
      'fecha_ingreso' => $this->created_at->format('d/m/Y'),
    ];
  }
}
