<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';

    protected $fillable = [
            'user_id', 'User', 'Name', 'Lastname', 'Email', 'Cellphone', 'Age', 'City',
    ];

    protected $hidden = [
        
    ];

    protected $casts = [
        
    ];
}
