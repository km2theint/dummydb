<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TUserlog extends Model
{
    use HasFactory;
    protected $table = 't_userlog';
    protected $fillable = [
        'log',
        'ctime'
    ];
    public $timestamps = false;
}
