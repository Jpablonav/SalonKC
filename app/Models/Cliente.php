<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    public function citas()
    {
        return $this->hasMany(Cita::class, 'cliente_id', 'id');
    }
}
