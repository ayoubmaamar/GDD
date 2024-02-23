<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentIdentity extends Model
{
    protected $table = 'STUDENT_IDENTITY';
    protected $primaryKey = 'ID_STUDENT_IDENTITY';

    protected $fillable = [
        'STUDENT_IDENTITY', 'ID_STUDENT'
    ];

    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo(Student::class, 'ID_STUDENT');
    }
}