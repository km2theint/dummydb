<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_client extends Model
{
    use HasFactory;

    protected $table = "t_client";

    protected $fillable = [
        'tenant_id', 'name', 'domain', 'is_main_domain', 'is_active'
    ];

    public $timestamps = false;
}
