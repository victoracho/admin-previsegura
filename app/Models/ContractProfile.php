<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContractProfile extends Model
{


  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'contract_id',
    'profile_id',
  ];

  public function contract()
  {
    return $this->belongsTo(Contract::class, 'contract_id');
  }

  public function profile()
  {
    return $this->belongsTo(Profile::class, 'profile_id');
  }
}
