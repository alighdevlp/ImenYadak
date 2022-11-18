<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuItemRequest;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuitems = MenuItem::all();
        return view('back.menu_items.index', compact('menuitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menucategories = MenuCategory::all();
        return view('back.menu_items.create', compact('menucategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuItemRequest $request)
    {
        MenuItem::create([
            'menuitem_name' => $request->menuitem_name,
            'is_heading' => $request->is_heading,
            'menu_category_id' => $request->menu_category
        ]);

        return redirect()->route('admin.menuitems.index');
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
    public function edit(MenuItem $menuitem)
    {
        $menucategories = MenuCategory::all();
        return view('back.menu_items.edit', compact('menuitem', 'menucategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuItemRequest $request, MenuItem $menuitem)
    {
        $menuitem->update([
            'menuitem_name' => $request->menuitem_name,
            'is_heading' => $request->is_heading,
            'menu_category_id' => $request->menu_category
        ]);

        return redirect()->route('admin.menuitems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuItem $menuitem)
    {
        $menuitem->delete();
        return redirect()->back();
    }
}
