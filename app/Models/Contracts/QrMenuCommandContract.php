<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrMenuQueryContract{

}

interface QrMenuCommandContract
{
    public function createMenu(Request $request): void;

    public function updateMenu(Request $request):void;

    public function deleteMenu(Request $request):void;
}
