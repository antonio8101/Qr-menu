<?php

namespace App\Http\Controllers\MenuAPI;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuAPIRequest\MenuCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuUpdateCustomRequest;
use App\Models\Menu;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;


class MenuController extends Controller
{

    public function index(Request $request)
    {
        return Menu::getInstance()->getAllMenu($request);
    }

    public function create(MenuCreateCustomRequest $request):void
    {
        Menu::getInstance()->createMenu($request);
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
    public function show(Request $request, $menu_id)
    {
        return Menu::getInstance()->getOneMenu($request, $menu_id);
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
     *
     * @return \Illuminate\Http\Response
     */
    public function update(MenuUpdateCustomRequest $request, $menu_id):void
    {
        Menu::getInstance()->updateMenu($request, $menu_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuDeleteCustomRequest $request, $menu_id):void
    {
        Menu::getInstance()->deleteMenu($request, $menu_id);
    }
}
