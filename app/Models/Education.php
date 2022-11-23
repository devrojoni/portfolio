<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Education extends Model
{
    use HasFactory, softDeletes;
    protected $fillable =[
        'institute',
        'course',
        'started_at',
        'end_at',
        'status',
    ];
    protected $casts =[
        'started_at' => 'datetime:Y-m-d',
        'end_at' => 'datetime:Y-m-d',
    ];
}
