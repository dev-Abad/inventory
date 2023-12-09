<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recordlist extends Model
{
    protected $table = 'record_models';

    protected $fillable = [
        'event', 
        'name', 
        'borrow',
        'return',
        'costume',
        'attire',
        'note',
    ];
}
