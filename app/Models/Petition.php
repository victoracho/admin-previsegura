<?php

namespace App\Models;

use App\Mail\createdPetition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Petition extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'plan_id',
    ];

    public function assistancePetitions()
    {
        return $this->hasMany(AssistancePetition::class, 'petition_id');
    }

    public function assistances()
    {
        return $this->belongsToMany(Assistance::class, 'assistance_petitions', 'petition_id', 'assistance_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'plan_id');
    }

    // mail created petition
    public function sendCreatedMail()
    {
        try {
            $admin = getenv('APP_ADMIN');
            $adminMessage = [
                'subject' => '¡Un usuario ha creado una solicitud!',
                'title' => '¡Bienvenido a Previsegura!',
                'petition' => $this,
                'admin' => $admin
            ];

            // Send email to admin.
            Mail::to(env('MAIL_ADDRESS'))->send(new createdPetition($adminMessage));

            return response()->json([
                'success' => true
            ], 200);
        } catch (Exception $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage()
            ], 200);
        }
    }
}
