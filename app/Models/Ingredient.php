<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    const NAME = 'name';

    protected $table = 'ingredient';

    public $timestamps = false;

    protected $fillable = [
        Ingredient::NAME
    ];

    protected $visible = [
        Ingredient::NAME,
    ];

    protected $hidden = [

    ];
}
