<?php

namespace App\Models\Contracts;

use App\Models\Section;
use Illuminate\Http\Request;

interface QrProductCommandContract
{
    public function createProduct(Request $request, $menu_id, $section_id): void;

    public function updateProduct(Request $request, $menu_id, $section_id, $product_id):void;

    public function deleteProduct(Request $request, $menu_id, $section_id, $product_id):void;
}
