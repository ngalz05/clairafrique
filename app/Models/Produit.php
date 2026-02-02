<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'code_produit',
        'titre',
        'description',
        'rubrique_id',
        'type'
    ];

    public function rubrique()
    {
        return $this->belongsTo(Rubrique::class);
    }

    public function attributs()
    {
        return $this->hasMany(AttributProduit::class);
    }
}

