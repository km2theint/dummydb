<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_roll extends Model
{
    use HasFactory;

    protected $table = 'Roll';

    protected $fillable = [
        'name', 'is_active'
    ];
}
