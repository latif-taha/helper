<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id_partenaire', 'date', 'dispo_matin', 'dispo_soir'];

    public function partenaire() {
        return $this->belongsTo(User::class, 'user_id_partenaire');
    }


}
