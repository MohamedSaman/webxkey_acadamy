<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    'code',
    'name',
    'description',
    'duration_months',
    'fee',
    'status'
];
}
