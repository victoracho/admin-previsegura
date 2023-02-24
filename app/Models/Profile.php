<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Mail\CreatedUser;
use Illuminate\Support\Facades\Mail;

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
    'address',
    'doc',
    'dependency',
    'state_id',
    'country_id',
    'gender',
  ];

  // Relations
  public function country()
  {
    return $this->hasOne(Country::class, 'country_id');
  }
  public function state()
  {
    return $this->belongsTo(CountryState::class, 'state_id');
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
