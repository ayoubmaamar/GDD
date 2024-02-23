<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'STUDENT'; 
    protected $primaryKey = 'ID_STUDENT'; 
    
    protected $fillable = [
        'FIRST_NAME_STUDENT', 'LAST_NAME_STUDENT', 'LAST_TRAINNING',
        'DATE_OF_BIRTH', 'ADDRESS_STUDENT', 'PHONE_STUDENT', 'ID_SCHOOL_LEVEL'
    ];

    public function documents()
    {
        return $this->hasMany(DocumentList::class, 'ID_STUDENT');
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'STUDENT_LANGUAGE', 'ID_STUDENT', 'ID_LANGUAGE');
    }
}