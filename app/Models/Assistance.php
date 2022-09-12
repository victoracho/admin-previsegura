<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Assistance extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'type_id',
    ];
    public function assistanceType() {
        return $this->belongsTo(AssistanceType::class, 'assistance_type_id');
    }

}
