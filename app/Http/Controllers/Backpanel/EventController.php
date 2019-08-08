<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadFile;
use App\Event;
use App\Gallery;

class EventController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backpanel.gallery.create');
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
        $filepaths = $this->uploadMultipleFile($request, 'images');

        $event = Event::create([
            'title'       => $request->title,
            'description' => $request->description
        ]);

        foreach ($filepaths as $filepath) {
            Gallery::create([
                'event_id' => $event->id,
                'image'    => $filepath
            ]);
        }

        return redirect()->back()->with(['class' => 'success', 'message' => 'Images succesfully uploaded']);
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
