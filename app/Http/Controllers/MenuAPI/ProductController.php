<?php

namespace App\Http\Controllers\MenuAPI;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuAPIRequest\ProductCreateCustomRequest;
use App\Http\Requests\MenuAPIRequest\ProductDeleteCustomRequest;
use App\Http\Requests\MenuAPIRequest\ProductUpdateCustomRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductCreateCustomRequest $request, $menu_id, $section_id):void
    {
        Product::getInstance()->createProduct($request, $menu_id, $section_id);
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
    public function show($id)
    {
        //
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
    public function update(ProductUpdateCustomRequest $request, $menu_id, $section_id, $product_id):void
    {
        Product::getInstance()->updateProduct($request, $menu_id, $section_id, $product_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductDeleteCustomRequest $request, $menu_id, $section_id, $product_id):void
    {
        Product::getInstance()->deleteProduct($request, $menu_id, $section_id, $product_id);
    }
}
