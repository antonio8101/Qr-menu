<?php

namespace App\Http\Controllers\MenuAPI;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;


class MenuController extends Controller
{

    public function index()
    {
        return [User::with('menu')->get(),
            Section::with('product')->get()
        ];

    }


    public function create(Request $request)
    {
        $menuData = $request->all([
            'name',
            'order',
            'visible'
        ]);

        $name = $menuData['name'];
        $order = $menuData['order'];
        $visible = $menuData['visible'];

           Menu::factory()->create([
             'name'=>$name,
             'order'=>$order,
             'visible'=>$visible
        ]);
         return 'Menu inserito correttamente';
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
