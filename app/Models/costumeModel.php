<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costumeModel extends Model
{
    use HasFactory;

    protected $table = 'costume_models';

    protected $fillable = [
        'qty', 
        'costume', 
        'attire'
    ];
}
