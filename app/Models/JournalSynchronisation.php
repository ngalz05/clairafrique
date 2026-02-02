<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalSynchronisation extends Model
{
    protected $fillable = [
        'type',
        'fichier',
        'statut',
        'message'
    ];
}

