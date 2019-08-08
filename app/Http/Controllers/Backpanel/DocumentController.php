<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_pages = Document::with('menu')->paginate('12');

        return view('backpanel.document.index', compact('all_pages'));

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

        return view('backpanel.document.create', compact('all_menus'));
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
        if(Document::where('menu_id', $request->menu)->first()){
            return redirect()->back()->with(['class' => 'error', 'message' => 'Already a page exists with this category']);
        }
        $document = Document::create([
            'title'   => $request->title,
            'menu_id' => $request->menu,
            'content' => $request->content,
        ]);

        return redirect()->back()->with(['class' => 'success', 'message' => 'Succesfully created a page named ' . '"' . $document->title . '"']);
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
        $all_menus = Menu::all();
        $page      = Document::find($id);
        $menu      = Menu::where('id', $page->menu_id)->first();

        return view('backpanel.document.edit', compact('all_menus', 'menu', 'page'));
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
        $page = Document::find($id);

        if($request->menu != $page->id && Document::where('menu_id', $page->id)->get()){
            return redirect()->back()->with(['class' => 'error', 'message' => 'A page with this menu already exists']);
        }

        $page->title   = $request->title;
        $page->menu_id = $request->menu;
        $page->content = $request->content;

        return rediret()->route('document.index')->with(['class' => 'success', 'message' => 'Pages succesfully updated']);
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
        $page = Document::find($id);
        $page->delete();

        return redirect()->back()->with(['class' => 'success', 'message' => 'Page succesfully deleted']);
    }
}
