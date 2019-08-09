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
        $all_events = Event::paginate(15);
        return view('backpanel.gallery.index', compact('all_events'));
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
        $event = Event::with('images')->find($id);

        return view('backpanel.gallery.edit', compact('event'));
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
        $event              = Event::findOrFail($id);
        $event->title       = $request->title;
        $event->description = $request->description;

        $event->save();

        return redirect()->route('event.index')->with(['class' => 'success', 'message' => 'succesfully updated the event']);
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
        $event = Event::find($id);

        $event->delete();

        return redirect()->back()->with(['class' => 'success', 'message' => 'Succesfully deleted event']);
    }
}
