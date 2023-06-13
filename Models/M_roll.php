<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_roll extends Model
{
    use HasFactory;

    protected $table = 'm_role';

    protected $fillable = [
        'name', 'is_active'
    ];

    public $timestamps = false;
}