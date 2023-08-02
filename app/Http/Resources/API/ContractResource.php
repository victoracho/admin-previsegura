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
        $familyMembers = $this->contractAssistances->filter(function ($item) {
            return $item->family_member_id != null;
        });

        return [
            'code' => $this->code,
            'assistance_name' => $this->assistance->name,
            'pdf' =>  env('APP_URL')  . '/pdfs/' . $this->code . '.pdf',
            'contract' => array(
                'id' => $hashids->encode($this->id),
                'status' => $this->status,
                'status_date' => $this->status_date,
                'coverage_date' => $this->coverage_date,
                'expire_date' => $this->expire_date,
                'covenant' => $this->covenant,
                'plan' => $this->plan,
                'bank_name' => $this->bank,
                'sales' => $this->sales,
                'payment_type' => $this->payment_type,
                'emission_date' => $this->emission,
                'retirement_date' => $this->retirement_date,
                'modality' => $this->modality,
                'fee_quantity' => $this->fee_quantity,
            ),
            'family_members' => FamilyMemberResource::collection($familyMembers),
            'payments' => PaymentResource::collection($this->payments),
            'details' => array(
                'yearly_amount' => $this->yearly_amount,
                'global_coverage' => $this->global_coverage,
                'funerary_coverage' => $this->funerary_coverage,
                'cemetery_coverage' => $this->cemetery_coverage,
                'funerary_reverse' => $this->funerary_reverse,
                'product' => $this->product,
                'cemetery' => $this->cemetery,
                'cemetery_reverse' => $this->cemetery_reverse,
                'vehicle_quantity' => $this->vehicle_quantity,
                'transportation' => $this->transportation,
            )
        ];
    }
}
