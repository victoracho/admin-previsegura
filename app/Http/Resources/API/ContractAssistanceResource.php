<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\API\ProfileInContractAssistanceResource;
use App\Http\Resources\API\FamilyMemberResource;

use Hashids\Hashids;

class ContractAssistanceResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  // public static $wrap = null;
  public function toArray($request)
  {
    $hashids = new Hashids('contract-helper', 20);
    return [
      'id' => $hashids->encode($this->id),
      'coverage_date' => $this->coverage_date,
      'inscription' => $this->inscription,
      'additional_amount' => $this->additional_amount,
      'profile' => new ProfileInContractAssistanceResource($this->profile),
      'bond' => new FamilyMemberResource($this->familyMember),

    ];
  }
}
