<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FrontpagePhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_images = DB::table('frontpage_photo')->paginate(15);

        return view('backpanel.frontpage_photo.index', compact('all_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backpanel.frontpage_photo.create');
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
        $filename = $this->uploadSingleFile($request, $request->file('imaeg'));

        DB::table('frontpage_photo')->create([
            'caption'  => $request->caption,
            'image'    => $request->image

        ]);

        return redirect()->back()->with(['class' => 'success', 'message' => 'Image succesfully uploaded']);
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
    $image = DB::table('frontpage_photo')->find($id);

    return view('backpanel.frontpage_photo.edit', compact('image'))



        
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
    $image = DB::table('frontpage_photo')->find($id);

        if($request->hasFile('image')){
            $image->update([    
                'image' => $this->uploadSingleFile($request, $request->file('image'))
             ]);
        }
            $image->update([    
                'caption' => $request->caption
             ]);

            return redirect()->back()->with(['class' => 'success' , 'message' => 'succesfully updated']);
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
        $image = DB::table('frontpage_photo')->find($id)->delete();

        return redirect()->back()->with(['class' => 'success' , 'message' => 'image succesfully deleted ']);
    }
}
