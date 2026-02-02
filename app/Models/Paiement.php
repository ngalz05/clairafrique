<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'commande_id',
        'mode',
        'statut',
        'reference'
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }
}

