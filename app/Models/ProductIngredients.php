<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductIngredients extends Model
{
    use HasFactory;

    const NAME = 'name';

    protected $table = 'productIngredients';

    public $timestamps = false;

    protected $fillable = [
        ProductIngredients::NAME
    ];
}
