<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolLevel extends Model
{
    protected $table = 'SCHOOL_LEVEL'; // Spécifie le nom de la table
    protected $primaryKey = 'ID_SCHOOL_LEVEL'; // Spécifie la clé primaire, si elle ne suit pas la convention de Laravel

    // Désactive les timestamps si votre table ne les utilise pas
    public $timestamps = false;

    protected $fillable = [
        'SCHOOL_LEVEL', // Les champs que vous autorisez à être assignés massivement
    ];
}