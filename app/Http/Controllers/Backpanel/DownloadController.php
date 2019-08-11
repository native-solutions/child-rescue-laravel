<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Traits\UploadFile;

use App\Menu;
use App\Download;

class DownloadController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //\
        $all_files = Download::paginate(15);

        return view('backpanel.downloads.index', compact('all_files'));

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

        return view('backpanel.downloads.create', compact('all_menus'));
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
       $filepath  = $this->uploadSingleFile($request, $request->file('file'));

        $download = Download::create([
            'title'   => $request->title,
            'title_nepali' => $request->nepalititle,
            'menu_id' => $request->menu,
            'file'    => $filepath
        ]);

        return redirect()->back()->with(['class' => 'success', 'message' => 'File succesfully uploaded']);


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

        $file = Download::find($id);

        return view('backpanel.downloads.edit', compact('all_menus', 'file'));
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
        $file = Download::find($id);

        if($request->hasFile('file')){
            $filepath   = $this->uploadSingleFile($reqeust, $request->file('file'));
            $file->file = $filepath;
        }

        $file->title = $request->title;
        $file->title_nepali => $request->nepalititle,


        if($request->menu){
            $file->menu_id = $request->menu; 
        }

        $file->save();

        return redirect()->route('downloads.index')->with(['class' => 'success', 'message' => 'file succesfully updated']);
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
        $file = Download::find($id);
        Storage::delete($file->file);

        $file->delete();

        return redirect()->back()->with(['class' => 'success', 'message' => 'File succesfully deleted']);
    }
}
