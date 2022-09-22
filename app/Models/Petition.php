<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'plan_id',
    ];

    public function assistancePetitions() {
        return $this->hasMany(AssistancePetition::class, 'petition_id');
    }

    public function assistances() {
        return $this->hasManyThrough(AssistancePetition::class, Assistance::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function plan() {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

}
