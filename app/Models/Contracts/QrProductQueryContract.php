<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrProductQueryContract
{
    public function searchProduct();

    public function getOneProduct(Request $request, $menu_id, $section_id, $product_id):mixed;

    public function getAllProduct(Request $request, $menu_id, $section_id):mixed;
}
