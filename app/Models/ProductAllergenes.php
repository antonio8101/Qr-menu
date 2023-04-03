<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAllergenes extends Model
{
    use HasFactory;

    const NAME = 'name';

    protected $table = 'productAllergenes';

    public $timestamps = false;

    protected $fillable = [

        ProductAllergenes::NAME
    ];

}
