<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;


class Profile extends Authenticatable
{
  use HasApiTokens;
  use HasFactory;
  use HasProfilePhoto;
  use Notifiable;
  use TwoFactorAuthenticatable;

  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'firstnames',
    'lastnames',
    'main_phone',
    'mobile_phone',
    'optional_phone',
    'work_phone',
    'deceased',
    'deceased_date',
    'address',
    'secondary_address',
    'email',
    'doc',
    'rif',
    'birthdate',
    'dependency',
    'state_id',
    'country_id',
    'city_id',
    'user_id',
    'gender',
    'civil_status',
  ];

  // Relations
  public function country()
  {
    return $this->belongsTo(Country::class, 'country_id');
  }
  public function user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function state()
  {
    return $this->belongsTo(CountryState::class, 'state_id');
  }
  public function city()
  {
    return $this->belongsTo(City::class, 'city_id');
  }

  public function familymember()
  {
    return $this->hasone(FamilyMember::class, 'profile_id');
  }

  public function getAgeAttribute()
  {
    return $this->birthdate ? Carbon::parse($this->birthdate)->age : null;
  }


  // public function sendCreatedUser($link)
  // {
  //
  //     $userMessage = [
  //         'subject' => '¡Tu usuario ha sido creado!',
  //         'title' => '¡Bienvenido a Previsegura!',
  //         'userData' => $this,
  //         'link' => $link
  //     ];
  //
  //     // Send email to user.
  //     // Mail::to($this->email)->send(new CreatedUser($userMessage));
  //     Mail::to('victoracho.box@gmail.com')->send(new CreatedUser($userMessage));
  // }
}
