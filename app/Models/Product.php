<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Adicione esta linha
    protected $fillable = ['name', 'description', 'price'];
}
