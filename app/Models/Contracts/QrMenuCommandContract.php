<?php

namespace App\Models\Contracts;

use App\Models\Menu;
use Illuminate\Http\Request;

interface QrMenuCommandContract
{
    public function createMenu(Request $request): void;

    public function updateMenu(Request $request, $menu_id):void;

    public function deleteMenu(Request $request, $menu_id):void;
}
