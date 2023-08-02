<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hashids\Hashids;

use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $dates = ['deleted_at'];
  protected $fillable = ['name', 'number_code'];
  protected $appends = ['hash_id'];

  public function getHashIdAttribute($query)
  {
    $hashids = new Hashids('countries-helper', 20);
    return  $hashids->encode($this->attributes['id']);
  }

  public function states()
  {
    return $this->hasMany(
      CountryState::class,
      'country'
    );
  }

  protected static function boot()
  {
    parent::boot();

    static::deleted(function ($country) {
      $country->states()->delete();
    });

    static::restored(function ($country) {
      $country->states()->withTrashed()->restore();
    });
  }
}
