<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $table = 'transaction';
    protected $guarded = [];
    protected $casts = [
        'deluxe_room_number' => 'array',
        'suite_room_number' => 'array',
        'standart_room_number' => 'array',
    ];

    public function numberRooms()
    {
        return $this->belongsTo(NumberRoom::class, 'number_room_id');
    }
}
