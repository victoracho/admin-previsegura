<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $dates = ['deleted_at'];
  protected $fillable = ['name', 'country_id', 'state_id'];
  protected $appends = ['hash_id'];

  public function country()
  {
    return $this->belongsTo(Country::class, 'country_id');
  }

  public function state()
  {
    return $this->belongsTo(CountryState::class, 'state_id');
  }

  protected static function boot()
  {
    parent::boot();
  }
}
