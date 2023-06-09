<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_tenant extends Model
{
    use HasFactory;
    protected $table = "t_tenant";

    protected $fillable = [
        'name', 'domain', 'is_active'
    ];

    public $timestamps = false;
}
