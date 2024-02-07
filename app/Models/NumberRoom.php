<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberRoom extends Model
{
    use HasFactory;
    protected $table = 'number_room';
    protected $guarded = [];

    public function typeRoom()
    {
        return $this->belongsTo(TypeRoom::class);
    }
}
