<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\API\ProfileInContractAssistanceResource;
use App\Http\Resources\API\FamilyMemberResource;

use Hashids\Hashids;

class PaymentResource extends JsonResource
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
      'amount' => $this->amount,
      'iva' => $this->iva,
      'expire_date' => $this->expire_date ? date('d/m/Y', strtotime($this->expire_date)) : null,
      'payment_date' => $this->payment_date ? date('d/m/Y', strtotime($this->payment)) : null,
      'from' => $this->from ? date('d/m/Y', strtotime($this->from)) : null,
      'to' => $this->to ? date('d/m/Y', strtotime($this->to)) : null,
      'additional_amount' => $this->additional_amount,
      'status' => $this->status,
      'payment_number' => $this->payment_number,
      'comments' => []

    ];
  }
}
