<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AssistancePetition extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'petition_id',
        'assistance_id',
    ];

    public function petition() {
        return $this->belongsTo(Petition::class, 'petition_id');
    }

    public function assistance() {
        return $this->belongsTo(Assistance::class, 'assistance_id');
    }
}
