<?php

namespace App\Http\Resources\API;

use App\Http\Resources\API\ContractAssistanceResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Hashids\Hashids;

class  AssistanceResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    $hashids = new Hashids('contract-helper', 20);

    return [
      'id' => $hashids->encode($this->id),
      'name' => $this->name,
      'description' => $this->description,
    ];
  }
}
