<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Document;
use App\Download;
use App\Menu;
use App\Event;
use App\SliderImage;
use App\QuickLink;
use App\News;
use App\Complain;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = SliderImage::all();
        $quick_links = QuickLink::all();
        $five_news = News::orderBy('created_at', 'desc')->take(5)->get();

        return view('welcome', compact('sliders', 'quick_links', 'five_news'));
    }

    /**
    * Show the document page or download page
    */

    public function page($id)
    {

        if($document = Document::where('menu_id', $id)->first()){
            return view('pages.document', compact('document'));
        }
        else if(Download::where('menu_id', $id)->first()){
            return view('pages.download', ['menu' => Menu::with('files')->find($id)]);
        }
        else{
            return redirect()->route('home');
        }

        
    }

    /**
    * Show the gallery based on event
    *
    **/

    public function gallery($id = 0)
    {
        if($id){
            $event = Event::with('images')->find($id);
        }
        else{
            $event = Event::with('images')->where('id', '!=' ,'null')->firstOrFail();
        }
        $all_events = Event::all();

        return view('pages.gallery', compact('event', 'all_events'));
    }

    public function singleNews($id)
    {
        $news = News::find($id);

        return view('pages.document')->with('document',$news);
    }


    public function ecomplain()
    {
        return view('ecomplain');
    }

    public function ecomplainStore(Request $request)
    {
        Complain::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()->back()->with(['class' => 'success', 'message' => 'Your complain has been registered succesfully.']);
    }


}
