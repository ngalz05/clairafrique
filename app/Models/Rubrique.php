<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rubrique extends Model
{
    protected $fillable = ['nom', 'rubrique_parent_id'];

    public function sousRubriques()
    {
        return $this->hasMany(Rubrique::class, 'rubrique_parent_id');
    }

    public function rubriqueParent()
    {
        return $this->belongsTo(Rubrique::class, 'rubrique_parent_id');
    }

    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
}
