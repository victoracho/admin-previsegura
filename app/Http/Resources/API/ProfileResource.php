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
      'birthdate' => $this->birthdate,
      'work_phone' => $this->work_phone,
      'optional_phone' => $this->optional_phone,
      'address' => $this->address,
      'doc' => $this->doc,
      'dependency' => $this->dependency,
      'state_id' => $this->state_id,
      'gender' => $this->gender,
      'country_id' => $this->country_id,
      'gender' => $this->gender,
      'fecha_ingreso' => $this->created_at->format('d/m/Y'),
    ];
  }
}
