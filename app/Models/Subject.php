<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory, SoftDeletes;



    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
