<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'USER_TYPE'; 
    protected $primaryKey = 'ID_USER_TYPE'; 

    public $timestamps = false; // Désactiver les timestamps si votre table ne les utilise pas

    protected $fillable = [
        'USER_TYPE', // Les champs assignables en masse
    ];
}