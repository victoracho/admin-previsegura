<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Upload extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'uploads';
    protected $fillable = [
        'user_id',
        'size',
        'name',
    ];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contract() {
        return $this->belongsTo(Plan::class, 'contract_id');
    }


}
