<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function citas()
    {
        return $this->hasMany(Cita::class, 'empleado_id', 'id');
    }
}
