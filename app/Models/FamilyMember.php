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
    'user_id',
    'profile_id',
    'bond',
  ];

  public function profile()
  {
    return $this->belongsTo(Profile::class, 'profile_id');
  }
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
  public function assistances()
  {
    return $this->belongsToMany(Assistance::class, 'contract_assistances', 'contract_id', 'assistance_id')->withPivot('id');
  }
}
