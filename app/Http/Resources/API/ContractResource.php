<?php

namespace App\Http\Resources\API;

use App\Http\Resources\API\ContractAssistanceResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Hashids\Hashids;
use App\Http\Resources\API\ProfileResource;
use App\Http\Resources\API\FamilyMemberResource;
use App\Http\Resources\API\PaymentResource;

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

    return [
      'code' => $this->code,
      'assistance_name' => $this->assistance->name,
      'pdf' => public_path() . '/pdfs/' . $this->code . '.pdf',
      'contract' => array(
        'id' => $hashids->encode($this->id),
        'status' => $this->status,
        'status_date' => $this->status_date ? date('d/m/Y', strtotime($this->status_date)) : null,
        'coverage_date' => $this->coverage_date ? date('d/m/Y', strtotime($this->coverage_date)) : null,
        'expire_date' => $this->expire_date ? date('d/m/Y', strtotime($this->expire_date)) : null,
        'covenant' => $this->covenant,
        'plan' => $this->plan,
        'bank_name' => $this->bank->name,
        'sales' => $this->sales,
        'payment_type' => $this->payment_type,
        'emission_date' => $this->emission ? date('d/m/Y', strtotime($this->emission)) : null,
        'retirement_date' => $this->retirement_date ? date('d/m/Y', strtotime($this->retirement_date)) : null,
        'modality' => $this->modality,
        'fee_quantity' => $this->fee_quantity,
      ),

      'family_members' => FamilyMemberResource::collection($this->contractAssistances),
      'payments' => PaymentResource::collection($this->payments),
    ];
  }
}
