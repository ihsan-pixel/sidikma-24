<?php

// app/Models/Broadcast.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Broadcast.php
class Broadcast extends Model
{
    protected $fillable = ['title', 'message', 'image_path', 'target_roles', 'target_users'];

    protected $casts = [
        'target_roles' => 'array',
        'target_users' => 'array',
    ];
}

