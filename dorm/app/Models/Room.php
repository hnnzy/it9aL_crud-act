<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_id';

    protected $fillable = [
        'room_number',
        'capacity',
        'available_slots'
    ];

    public function allocations()
    {
        return $this->hasMany(Allocation::class, 'room_id', 'room_id');
    }
}
