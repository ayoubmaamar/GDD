<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    // Assurez-vous que le nom de la table correspond à ce que vous avez dans la base de données
    protected $table = 'user_type'; 

    // Indique si le modèle doit gérer les timestamps
    public $timestamps = false;

    // Les attributs qui sont assignables en masse.
    protected $fillable = [
        'name',
        'email',
        'id_user_type',
        // Ajoutez d'autres colonnes si nécessaire
    ];

    // Définit la relation vers le modèle User
    public function users() {
        return $this->hasMany(User::class, 'id_user_type');
    }
}
