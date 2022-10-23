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
    ];

    public function contract() {
        return $this->belongsTo(Contract::class, 'contract_id');
    }

    public function assistance() {
        return $this->belongsTo(Assistance::class, 'assistance_id');
    }
}
