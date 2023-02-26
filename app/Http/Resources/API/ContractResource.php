<?php

namespace App\Http\Resources\API;

use App\Http\Resources\API\ContractAssistanceResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Hashids\Hashids;

class ContractResource extends JsonResource
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
    $userHash = new Hashids('user-helper', 20);

    return [
      'id' => $hashids->encode($this->id),
      'user_id' => $userHash->encode($this->user_id),
      'direct_debit_acceptance' => $this->direct_debit_acceptance,
      'mod_phone_number' => $this->mod_phone_number,
      'mod_email' => $this->mod_email,
      'registration_date' => $this->registration_date,
      'expire_date' => $this->expire_date,
      'status' => $this->status,
      'status_date' => $this->optional_phone,
      'retirement_date' => $this->retirement_date,
      'payment_date' => $this->payment_date,
      'coverage_date' => $this->coverage_date,
      'expires' => $this->expires,
      'covenant' => $this->covenant,
      'plan' => $this->plan,
      'payment_date' => $this->payment_date,
      'modality' => $this->modality,
      'emission' => $this->emission,
      'sales' => $this->sales,
      'fee_quantity' => $this->fee_quantity,
      'profile_id' => $userHash->encode($this->profile_id),
      'bank_id' => $hashids->encode($this->bank_id),
      'assistances' => ContractAssistanceResource::collection($this->contractAssistances),
      'payments' => PaymentResource::collection($this->payments)
    ];
  }
}
