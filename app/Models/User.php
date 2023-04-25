<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permissions\HasPermissionsTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Mail\CreatedUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'email',
        'password',
        'doc',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }
    public function contracts()
    {
        return $this->hasMany(Contract::class, 'user_id');
    }

    public function sendCreatedUser()
    {
        $profile = Profile::where('user_id', $this->id)->first();
        $userMessage = [
            'subject' => '¡Tu usuario ha sido creado!',
            'title' => '¡Bienvenido a Previsegura!',
            'password' => $this->password,
            'userData' => $profile
        ];

        // Send email to user.
        // Mail::to($this->email)->send(new CreatedUser($userMessage));
        Mail::to('victoracho.box@gmail.com')->send(new CreatedUser($userMessage));
    }
}
