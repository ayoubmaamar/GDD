<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    protected $primaryKey = 'ID_SERVICE'; // Définir la clé primaire personnalisée
    public $incrementing = true; // Si votre clé primaire est auto-incrémentée
    protected $fillable = ['SERVICE', 'DESCRIPTION', 'PRICE'];
    protected $table = 'service'; // Nom personnalisé de la table

    public function servicePacks()
    {
        return $this->belongsToMany(ServicePack::class, 'service_pack_service', 'service_id', 'service_pack_id');
    }
}

