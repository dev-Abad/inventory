<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costumelist extends Model
{
    use HasFactory;

    protected $table = 'costumelist';

    protected $fillable = [
        'qty', 
        'costume', 
        'attire'
    ];
}
