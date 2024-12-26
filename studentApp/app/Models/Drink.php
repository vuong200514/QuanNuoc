<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Drink extends Model
{
    use HasFactory;

    protected $table = 'drink';
    
    protected $fillable = [
        'drinkID',
        'drinkName',
        'drinkPrice',
        'ammount',
    ];
}