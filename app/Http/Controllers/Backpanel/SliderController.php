<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadFile;

use App\SliderImage;

class SliderController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $all_slider_images = SliderImage::paginate(15);

        return view('backpanel.slider.index', compact('all_slider_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backpanel.slider.create');
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
        $filepath = $this->uploadSingleFile($request, $request->file('image'));

        SliderImage::create([
            'image'   => $filepath,
            'caption' => $request->caption,
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
        $image = SliderImage::find($id);

        return view('backpanel.slider.edit', compact('image'));
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
        $image = SliderImage::find($id);

        if($request->hasFile('image'))
        {
            $image->image = $this->uploadSingleFile($request, $request->file('image'));
        }
        $image->caption = $request->caption;
        $image->save();

        return redirect()->route('slider.index')->with(['class' => 'success', 'message' => 'Succesfully updated image']);
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
        $image = SliderImage::find($id);
        $image->delete();

        return redirect()->back()->with(['class' => 'success' , 'message' => 'succesfully deleted image']);
    }
}
