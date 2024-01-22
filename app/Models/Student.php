<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['dni', 'name','lastname','email','phone'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
}
