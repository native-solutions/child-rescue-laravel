<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\QuickLink;

class QuickLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quicklinks = QuickLink::paginate(15);

        return view('backpanel.quicklinks.index', compact('quicklinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backpanel.quicklinks.create');
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
        QuickLink::create([
            'title' => $request->title,
            'url'   => $request->url
        ]);

        return redirect()->back()->with(['class' => 'success', 'message' => 'Succesfully created quick link']);
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
        //\
        $link = QuickLink::find($id);

        return view('backpanel.quicklinks.edit', compact('link'));
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
        $link = QuickLink::find($id);

        $link->title = $request->title;
        $link->url   = $request->url;

        $link->save();

        return redirect()->route('quicklink.index')->with(['class' => 'success' , 'message' => 'Succesfully updated quick link']);
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
        $link = QuickLink::find($id);
        $link->delete();

        return redirect()->back()->with(['class' => 'success', 'message' => 'Succesfully deleted quick link']);
    }
}

