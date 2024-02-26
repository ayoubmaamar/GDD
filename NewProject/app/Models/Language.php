<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'LANGUAGE'; 
    protected $primaryKey = 'ID_LANGUAGE'; 

    protected $fillable = ['LANGUAGE'];

    public $timestamps = false; 

    public function students()
    {
        return $this->belongsToMany(Student::class, 'STUDENT_LANGUAGE', 'ID_LANGUAGE', 'ID_STUDENT');
    }

    

}