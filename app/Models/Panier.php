<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $fillable = ['utilisateur_id', 'statut'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function items()
    {
        return $this->hasMany(PanierItem::class);
    }
}
