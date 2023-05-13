<?php

namespace App\Models\Contracts;

use Illuminate\Http\Request;

interface QrSectionCommandContract
{
    public function createSection(Request $request): void;

    public function updateSection(Request $request):void;

    public function deleteSection(Request $request):void;
}
