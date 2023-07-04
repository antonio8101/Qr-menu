<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    const AMOUNT = 'amount';
    const DISCOUNT = 'discount';
    const FORMAT = 'formant';
    const VISIBLE = 'visible';

    protected $table = 'price';

    public $timestamps = false;

    protected $fillable = [
        Price::AMOUNT,
        Price::DISCOUNT,
        Price::FORMAT,
        Price::VISIBLE
    ];

    protected $visible = [
        Price::AMOUNT,
        Price::DISCOUNT,
        Price::FORMAT
    ];

    protected $hidden = [
        Price::VISIBLE
    ];

}
