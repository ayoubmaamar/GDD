<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $table = 'TUTOR'; // Nom de la table

    protected $fillable = [
        'FAMILIAL_LINK', 'FIRST_NAME_TUTOR', 'LAST_NAME_TUTOR', 'ADDRESS_TUTOR', 'EMAIL_TUTOR'
    ];

    // Si vous souhaitez utiliser les timestamps de Laravel
    public $timestamps = true;
}