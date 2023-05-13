<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrProductCommandContract
{
    public function createProduct(Request $request): void;

    public function updateProduct(Request $request):void;

    public function deleteProduct(Request $request):void;
}
