<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_userroll extends Model
{
    use HasFactory;

    protected $table = 'Userroll';

    protected $fillable = [
        'account_id', 'roll_id'
    ];
}
