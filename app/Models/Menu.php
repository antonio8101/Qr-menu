<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    use HasFactory;

    const NAME = 'name';
    const ORDER = 'order';
    const VISIBLE = 'visible';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $table = 'menu';

    public $timestamps = false;

    protected $fillable = [
        Menu::NAME
    ];

    protected $hidden = [
        Menu::ORDER,
        Menu::VISIBLE,
        Menu::CREATED_AT,
        Menu::UPDATED_AT,
        Menu::DELETED_AT
    ];
}
