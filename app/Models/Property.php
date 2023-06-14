<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    const NAME = 'name';
    const IMAGE = 'image';
    const VISIBLE = 'visible';


    protected $table = 'property';

    public $timestamps = false;

    protected $fillable = [
        Property::NAME,
        Property::IMAGE,
        Property::VISIBLE
    ];

    protected $visible = [
        Property::NAME
    ];

    protected $hidden = [
        Property::IMAGE,
        Property::VISIBLE
    ];
}
