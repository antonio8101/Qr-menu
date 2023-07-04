<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrMenuQueryContract
{
    public function searchMenu();

    public function getOneMenu(Request $request, $id);

    public function getAllMenu(Request $request);
}
