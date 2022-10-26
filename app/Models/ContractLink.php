<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ContractLink extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'expires_at',
        'expired',
        'token',
        'contract'
    ];

    public function contract() {
        return $this->belongsTo(Contract::class, 'contract');
    }

}
