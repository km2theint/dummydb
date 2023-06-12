<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBudget extends Model
{
    use HasFactory;
    protected $table = 't_budget';
    protected $fillable = [
        'year',
        'month',
        'count',
        'amount',
        'ctime'
    ];

    public $timestamps = false;
}
