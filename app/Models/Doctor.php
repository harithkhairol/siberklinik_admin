<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $connection = 'mysql2';
    
    protected $table = 'users';
    
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'email',
        'phone_no',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
