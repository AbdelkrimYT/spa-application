<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'password' => 'hashed'
    ];
}
