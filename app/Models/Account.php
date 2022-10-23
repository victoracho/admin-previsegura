<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Account extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'number_account',
    ];


    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }




    

}
