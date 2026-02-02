<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'utilisateur_id',
        'montant_total',
        'statut',
        'code_commande'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function lignes()
    {
        return $this->hasMany(CommandeLigne::class);
    }

    public function paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
