<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrMenuCommandContract
{
    public function create(Request $request):void;

    public function update():void;

    public function delete():void;
}
