<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrSectionCommandContract
{
    public function createSection(Request $request, $menu_id): void;

    public function updateSection(Request $request, $menu_id, $section_id):void;

    public function deleteSection(Request $request, $menu_id, $section_id):void;
}
