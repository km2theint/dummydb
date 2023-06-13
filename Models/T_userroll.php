<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_userroll extends Model
{
    use HasFactory;

    protected $table = 't_userroll';

    protected $fillable = [
        'account_id', 'roll_id'
    ];

    public $timestamps = false;
}