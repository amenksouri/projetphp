<?php
// app/Models/Inscription.php
// app/Models/Inscription.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table = 'inscription';
    protected $fillable = [
        'user_id', 'f_name', 'l_name', 'email', 'password',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

