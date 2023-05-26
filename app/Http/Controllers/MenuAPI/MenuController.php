<?php

namespace App\Http\Controllers\MenuAPI;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuAPIRequest\MenuCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\MenuUpdateCustomRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class MenuController extends Controller
{
    /**
     * Returns all the menu created
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        return Menu::getInstance()->getAllMenu($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function show(Request $request, int $id)
    {
        return Menu::getInstance()->getOneMenu($request, $id);
    }


    /**
     * Create a new resource in storage.
     *
     * @param MenuCreateCustomRequest $request
     *
     * @return Response
     */
    public function create(MenuCreateCustomRequest $request): Response
    {
        Menu::getInstance()->createMenu($request);

        return \response(null, 204);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MenuUpdateCustomRequest  $request
     *
     * void
     */
    public function update(MenuUpdateCustomRequest $request):void
    {
        Menu::getInstance()->updateMenu($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  MenuDeleteCustomRequest  $request
     */
    public function destroy(MenuDeleteCustomRequest $request):void
    {
        Menu::getInstance()->deleteMenu($request);
    }
}
