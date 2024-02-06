<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    use HasFactory;
    protected $table = 'type_room';
    protected $guarded = [];

    public function numberRoom()
    {
        return $this->hasMany(NumberRoom::class);
    }
}
