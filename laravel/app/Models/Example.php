<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table    = 'examples';
    protected $dates    = [
        'updated_at',
        'created_at',
    ];
    protected $fillable = [
        'name',
        'value'
    ];
}
