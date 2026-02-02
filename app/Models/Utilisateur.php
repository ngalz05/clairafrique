<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = [
        'email',
        'mot_de_passe',
        'nom',
        'adresse',
        'telephone',
        'code_client_web'
    ];

    public function paniers()
    {
        return $this->hasMany(Panier::class);
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
