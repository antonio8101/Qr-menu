<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergen extends Model
{
    use HasFactory;

    const NAME = 'name';
    const VISIBLE = 'visible';

    protected $table = 'allergen';

    public $timestamps = false;

    protected $fillable = [
        Allergen::NAME,
        Allergen::VISIBLE
    ];

    protected $visible = [
        Allergen::NAME,
    ];

    protected $hidden = [
        Allergen::VISIBLE
    ];
}
