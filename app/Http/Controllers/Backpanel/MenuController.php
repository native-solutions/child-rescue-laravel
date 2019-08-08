<?php

namespace App\Http\Controllers\Backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_menus = Menu::paginate(10);

        return view('backpanel.menu.index', compact('all_menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $all_menus = Menu::all();

        return view('backpanel.menu.create', compact('all_menus'));
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
        $menu = Menu::create([
            'title' => $request->title,
            'parent' => $request->parent
        ]); 

        return redirect()->back()->with(['class' => 'success', 'message' => "$menu->title Menu created succesfully" ]);
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
        $menu      = Menu::find($id);
        $all_menus = Menu::all();

        return view('backpanel.menu.edit', compact('menu', 'all_menus'));
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
        $menu = Menu::findOrFail($id);

        $menu->title = $request->title;
        $menu->parent_id = $request->parent;

        $menu->save();

        return redirect()->route('menu.index')->with(['class' => 'success', 'message' => 'Menu updated succesfully']);
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
        $menu  = Menu::find($id);
        $menu->delete();
        return redirect()->back()->with(['class' => 'error', 'message' => 'Menu deleted succesfully']);
    }
}
