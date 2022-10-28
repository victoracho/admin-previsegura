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
        'account_id',
        'direct_debit_acceptance',
        'mod_phone_number',
        'mod_email',
        'registration_date'
    ];
    
    public function contractAssistances() {
        return $this->hasMany(ContractAssistance::class, 'contract_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mod() {
        return $this->belongsTo(User::class, 'mod_id');
    }

    public function account() {
        return $this->belongsTo(Plan::class, 'account_id');
    }


}
