<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TWithBench extends Model
{
    use HasFactory;

    protected $table = 't_with_bench';
    protected $fillable = [
        'year',
        'month',
        'count',
        'cost',
        'ctime'
    ];

    public $timestamps = false;
}
