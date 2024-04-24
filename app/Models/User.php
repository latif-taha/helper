<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom', 'prenom', 'telephone', 'email', 'role', 'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function services() {
        return $this->hasMany(Service::class);
    }

    public function categories() {
        return $this->belongsTo(Categorie::class);
    }


    public function demandes() {
        return $this->hasMany(Demande::class);
    }

    public function interventions() {
        return $this->hasMany(Intervention::class);
    }

    public function commentnoteclient() {
        return $this->hasMany(CommentNoteClient::class);
    }

    public function commentnoteintervention() {
        return $this->hasMany(CommentNoteIntervention::class);
    }
    

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
