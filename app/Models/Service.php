<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_id', 'nom', 'description'];

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    public function tarifs() {
        return $this->hasMany(Tarif::class);
    }

    public function demandes() {
        return $this->hasMany(Demande::class);
    }

    public function partenaires() {
        return $this->belongsTo(User::class, 'user_id_partenaire');
    }
}
