<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    const URI = 'uri';
    const ORDER = 'order';

    protected $table = 'productImages';

    public $timestamps = false;

    protected $hidden = [
        ProductImages::URI,
        ProductImages::ORDER,
    ];

}
