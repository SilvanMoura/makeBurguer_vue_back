<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Burguer extends Model
{
    use HasFactory;

    protected $table = 'ordered_hamburgers';
    protected $fillable = ['name', 'meat', 'bread', 'optionals', 'status']; 
}
