<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_account extends Model
{
    use HasFactory;

    protected $table = 't_account';

    protected $fillable = [
        'email', 'tenant_id', 'client_id', 'name', 'is_active', 'token', 'token_limitation', 'user_info', 'atime', 'ctime'
    ];

    public $timestamps = false;
}