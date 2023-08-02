<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractAssistance extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'contract_id',
        'assistance_id',
        'coverage_date',
        'inscription',
        'family_member_id',
        'profile_id',
        'additional_amount',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
    public function assistance()
    {
        return $this->belongsTo(Assistance::class, 'assistance_id');
    }
    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }
    public function familyMember()
    {
        return $this->belongsTo(FamilyMember::class, 'family_member_id');
    }
}
