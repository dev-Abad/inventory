<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recordModel extends Model
{
    use HasFactory;

    protected $table = 'record_models';

    protected $fillable = [
        'event', 
        'name', 
        'borrow',
        'return',
        'costume',
        'attire',
    ];
}
