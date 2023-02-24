<?php

namespace App\Models;

use App\Mail\createdPetition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Bank extends Model
{


  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name',
    'description',
    'bank_code',
  ];
}
