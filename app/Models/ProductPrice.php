<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    const AMOUNT = 'amount';
    const DISCOUNT = 'discount';
    const FORMAT = 'format';
    const VISIBLE = 'visible';

    protected $table = 'productPrice';

    public $timestamps = false;

    protected $visible = [
        ProductPrice::AMOUNT,
        ProductPrice::DISCOUNT
    ];

    protected $hidden = [
        ProductPrice::VISIBLE,
        ProductPrice::FORMAT
    ];
}
