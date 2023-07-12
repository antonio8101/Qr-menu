<?php

namespace App\Traits;

use App\Models\Contracts\QrMenuCommandContract;
use App\Models\Contracts\QrMenuCreateContract;

trait HasGetInstance
{
    public static function getInstance()
    {
        $instance = static::class;
        return new $instance;
    }
}
