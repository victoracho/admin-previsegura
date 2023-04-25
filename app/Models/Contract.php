<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contract extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'code',
        'account_id',
        'direct_debit_acceptance',
        'mod_phone_number',
        'mod_email',
        'registration_date',
        'expire_date',
        'status',
        'status_date',
        'retirement_date',
        'payment_type',
        'coverage_date',
        'expires',
        'covenant',
        'plan',
        'payment_date',
        'modality',
        'fee_quantity',
        'bank',
        // 'bank_id',
        'profile_id',
        'assistance_id',
        'emission',
        'sales',
    ];

    public function contractAssistances()
    {
        return $this->hasMany(ContractAssistance::class, 'contract_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function assistance()
    {
        return $this->belongsTo(Assistance::class, 'assistance_id');
    }

    public function mod()
    {
        return $this->belongsTo(User::class, 'mod_id');
    }
    public function familyMembers()
    {
        return $this->belongsToMany(Profile::class, 'family_members', 'contract_id', 'profile_id')->withPivot('id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class, 'contract_id');
    }

    public function account()
    {
        return $this->belongsTo(Plan::class, 'account_id');
    }
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
