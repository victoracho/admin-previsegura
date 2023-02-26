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
      'id' => $hashids->encode($this->id),
      'bond' => $this->bond,
    ];
  }
}
