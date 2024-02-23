<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentList extends Model
{
    protected $table = 'DOCUMENT_LIST'; // Nom de la table

    protected $fillable = [
        'TITLE_DOCUMENT', 'PATH_FILE', 'ID_STUDENT'
    ];

    // Définir la relation avec Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'ID_STUDENT');
    }
}