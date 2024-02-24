<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fizzy extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'like'
    ];

}
