<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTable extends Model
{
    protected $table = 'USER_TABLE'; // Spécifiez le nom de la table si nécessaire
    protected $fillable = ['ID_GOOGLE', 'EMAIL_USER', 'PASSWORD_USER', 'HASH_PASSWORD_USER'];

    public $timestamps = true; // Activez si vous voulez utiliser les timestamps de Laravel
}