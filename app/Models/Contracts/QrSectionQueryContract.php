<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrSectionQueryContract
{
    public function searchSection();

    public function getOneSection(Request $request, $menu_id, $section_id):mixed;

    public function getAllSection(Request $request, $menu_id):mixed;
}
