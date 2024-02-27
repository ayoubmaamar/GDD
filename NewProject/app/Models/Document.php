<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'DOCUMENT_LIST';
    protected $fillable = [
        'TITLE_DOCUMENT', 'PATH_FILE', 'ID_STUDENT'
    ];

    // Définir la relation avec Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'ID_STUDENT');
    }
}