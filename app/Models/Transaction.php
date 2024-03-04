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
        'deluxe_room_number' => 'integer',
        'suite_room_number' => 'integer',
        'standart_room_number' => 'integer',
    ];

    public function numberRooms()
    {
        return $this->belongsTo(NumberRoom::class, 'number_room_id');
    }
}
