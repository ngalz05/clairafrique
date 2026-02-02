<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttributProduit extends Model
{
    protected $fillable = [
        'produit_id',
        'nom',
        'valeur'
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}

