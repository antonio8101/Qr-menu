<?php

namespace App\Http\Controllers\MenuAPI;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuAPIRequest\MenuCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuUpdateCustomRequest;
use App\Models\Menu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class MenuController extends Controller
{

    public function index(Request $request)
    {
        return Menu::getInstance()->getAllMenu($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $menu_id)
    {
        return Menu::getInstance()->getOneMenu($request, $menu_id);
    }

    public function create(MenuCreateCustomRequest $request): Response
    {
        Menu::getInstance()->createMenu($request);

        return \response(null,204);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function update(MenuUpdateCustomRequest $request, $menu_id):void
    {
        Menu::getInstance()->updateMenu($request, $menu_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(MenuDeleteCustomRequest $request, $menu_id):void
    {
        Menu::getInstance()->deleteMenu($request, $menu_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
}
