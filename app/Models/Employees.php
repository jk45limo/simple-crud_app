<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    public $timestamps = true;

    //protected $casts = [
        //'cost' => 'float'
    //];

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'job_title',
        'county',
        'department',
    ];
}
