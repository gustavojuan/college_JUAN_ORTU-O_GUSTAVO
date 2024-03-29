<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable  = [
        'ref','name','hours','practices'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
