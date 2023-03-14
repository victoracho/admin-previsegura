<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Hashids\Hashids;

class FamilyMemberResource extends JsonResource
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
      'coverage_date' => date('d/m/Y', strtotime($this->coverage_date)),
      'inscription' => date('d/m/Y', strtotime($this->inscription)),
      'additional_amount' => $this->additional_amount,
      'bond' => $this->familyMember->bond,
      'firstnames' => $this->profile->firstnames,
      'lastnames' => $this->profile->lastnames,
      'main_phone' => $this->profile->main_phone,
      'mobile_phone' => $this->profile->mobile_phone,
      'birthdate' => $this->profile->birthdate,
      'work_phone' => $this->profile->work_phone,
      'optional_phone' => $this->profile->optional_phone,
      'address' => $this->profile->address,
      'doc' => $this->profile->doc,
      'dependency' => $this->profile->dependency,
      'state_id' => $this->profile->state_id,
      'gender' => $this->profile->gender,
      'country_id' => $this->profile->country_id,
      'gender' => $this->profile->gender,
      'fecha_ingreso' => $this->profile->created_at->format('d/m/Y'),

    ];
  }
}
