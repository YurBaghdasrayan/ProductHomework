<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartypes extends Model
{
    use HasFactory;

    protected $table = 'cartypes';

    protected $fillable = [
        'type',
    ];
}
