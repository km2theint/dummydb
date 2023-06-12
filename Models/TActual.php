<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TActual extends Model
{
    use HasFactory;
    protected $table = 't_actual';
    protected $fillable = [
        'year',
        'month',
        'count',
        'amount',
        'cost',
        'ctime'
    ];

    public $timestamps = false;
}
