<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $connection = 'mysql3';

    protected $table = 'appointments';

    use HasFactory;

    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'doctor_id');
    }

    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'id', 'user_id');
    }
}
