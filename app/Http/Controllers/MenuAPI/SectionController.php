<?php

namespace App\Http\Controllers\MenuAPI;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuAPIRequest\SectionCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\SectionDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\SectionUpdateCustomRequest;
use App\Models\Section;
use Illuminate\Http\Request;


class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $menu_id):mixed
    {
        return Section::getInstance()->getAllSection($request, $menu_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SectionCreateCustomRequest $request, $menu_id):void
    {
        Section::getInstance()->createSection($request, $menu_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $menu_id, $section_id):mixed
    {
        return Section::getInstance()->getOneSection($request, $menu_id, $section_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SectionUpdateCustomRequest $request, $menu_id, $section_id):void
    {
        Section::getInstance()->updateSection($request, $menu_id, $section_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionDeleteCustomRequest $request, $menu_id, $section_id):void
    {
        Section::getInstance()->deleteSection($request, $menu_id, $section_id);
    }
}
