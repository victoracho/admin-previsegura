<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\API\ProfileResource;

use Hashids\Hashids;

class ClientResource extends JsonResource
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
    $hashids = new Hashids('user-helper', 20);
    return [
      'id' => $hashids->encode($this->id),
      'doc' => $this->doc,
      'email' => $this->email,
      'profile' => new ProfileResource($this->profile),
    ];
  }
}
