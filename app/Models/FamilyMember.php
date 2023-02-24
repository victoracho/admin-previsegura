<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{


  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'contract_id',
    'user_id',
    'profile_id',
    'bond',
    'coverage_date',
    'additional_amount',
    'deceased',
    'deceased_date',
    'inscription',


  ];

  public function contract()
  {
    return $this->belongsTo(Contract::class, 'contract_id');
  }
  public function profile()
  {
    return $this->belongsTo(Profile::class, 'profile_id');
  }
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
