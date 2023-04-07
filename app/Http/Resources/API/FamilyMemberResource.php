<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Hashids\Hashids;
use Carbon\Carbon;

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
      'additional_amount' =>  floatval($this->additional_amount),
      'bond' => $this->familyMember->bond,
      'firstnames' => $this->profile->firstnames,
      'lastnames' => $this->profile->lastnames ? $this->profile->lastnames : '',
      'main_phone' => $this->profile->main_phone,
      'mobile_phone' => $this->profile->mobile_phone,
      'deceased_date' => $this->profile->birthdate ? date('d/m/Y', strtotime($this->profile->birthdate)) : null,
      'work_phone' => $this->profile->work_phone,
      'email' => $this->profile->email,
      'optional_phone' => $this->profile->optional_phone,
      'deceased' => $this->profile->deceased == 1 ? true : false,
      'gender' => $this->profile->gender == 1 ? 'M' : 'F',
      'deceased_date' => $this->profile->deceased_date ? date('d/m/Y', strtotime($this->profile->deceased_date)) : null,
      'address' => $this->profile->address,
      'doc' => $this->profile->doc,
      'dependency' => $this->profile->dependency,
      'city' => $this->profile->city_id ? $this->profile->city->name : null,
      'state' => $this->profile->state_id ? $this->profile->state->name : null,
      'country' => $this->profile->country_id ? $this->profile->country->name : null,
      'fecha_ingreso' => $this->profile->created_at->format('d/m/Y'),
    ];
  }
}
