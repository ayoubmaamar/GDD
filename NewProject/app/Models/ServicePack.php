<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePack extends Model
{
    protected $table = 'SERVICE_PACK'; // Spécifiez le nom de la table

    protected $fillable = [
        'SERVICE_PACK', 'DESCRIPTION', 'PRICE'
    ];

    // Laravel gère automatiquement ces champs si vous ne les désactivez pas
    public $timestamps = true;
}