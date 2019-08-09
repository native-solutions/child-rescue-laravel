<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadFile;

use App\News;

class NewsController extends Controller
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
        $all_news = News::paginate(10);
        
        return view('backpanel.news.index', compact('all_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backpanel.news.create');
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
        if($request->hasFile('image')){
            $imagename = $this->uploadSingleFile($request, $request->file('image'));
        }else{
            $imagename = "images/news/default.png";
        }
        News::create([  
            'title'  => $request->title,
            'description' => $request->content,
            'image'       => $imagename,
        ]);

        return redirect()->back()->with(['class' => 'success', 'message' => 'News stored succesfully']);
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
        $news = News::find($id);

        return view('backpanel.news.edit', compact('news'));
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
        $news = News::find($id);

        if($request->hasFile('image')){
            $news->image = $this->uploadSingleFile($request, $request->file('image'));
        }

        $news->title       = $request->title;
        $news->description = $request->description;

        $news->save();

        return redirect()->route('news.index')->with(['class' => 'success', 'message' => 'Succesfully updated name']);
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
        $news = News::find($id);

        $news->delete();

        return redirect()->back()->with(['class' => 'success', 'message' => 'Succesfully deleted news']);
    }
}
