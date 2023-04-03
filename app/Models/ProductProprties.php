<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProprties extends Model
{
    use HasFactory;

    const NAME = 'name';

    const IMAGES = 'images';

    protected $table = 'productProperties';

    public $timestamps = false;

    protected $visible = [

        ProductProprties::NAME,
        ProductProprties::IMAGES
    ];
}
