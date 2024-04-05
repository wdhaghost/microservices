<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function courses(){
        return $this->belongsToMany(Course::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    use HasFactory;
}
