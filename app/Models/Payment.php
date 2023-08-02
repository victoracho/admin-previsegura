<?php

namespace App\Models;

use App\Mail\createdPetition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'contract_id',
        'amount',
        'iva',
        'expire_date',
        'payment_date',
        'from',
        'to',
        'additional_amount',
        'status',
        'payment_number',
        'total_calculated',
    ];
    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
}
