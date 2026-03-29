<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_number',
        'course',
        'year_level'
    ];

    public function allocations()
    {
        return $this->hasMany(Allocation::class, 'student_id', 'student_id');
    }
}
