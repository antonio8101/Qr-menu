<?php

namespace App\Http\Controllers\MenuAPI\Contracts;

interface QrMenuCommandContract
{
    public function create():void;

    public function updateModel():void;

    public function delete():void;
}

