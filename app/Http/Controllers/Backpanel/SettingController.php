<?php

namespace App\Http\Controllers\backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadFile;

use App\Setting;

class SettingController extends Controller
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
        return redirect()->route('setting.edit',['id' => 1]);

        //
        return view('backpanel.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return redirect()->route('setting.edit',['id' => 1]);
        //
        $main_logo_file = $this->uploadSingleFile($request, $request->file('main_logo'));
        $right_logo_file = $this->uploadSingleFile($request, $request->file('logo_right'));

        Setting::create([
            'site_name'          => $request->site_title,
            'site_name_nepali'          => $request->site_title_nepali,
            'email'              => $request->email,
            'emergency_number'   => $request->emergency_number,
            'emergency_number_nepali'   => $request->emergency_number_nepali,            
            'phone_number'       => $request->phone_number,
            'phone_number_nepali' => $request->phone_number_nepali,
            'address'            =>     $request->address,
            'address_nepali'            => $request->address_nepali,
            'header_logo_center' => $main_logo_file,
            'header_logo_right'  => $right_logo_file,
            'top_nav_color'      => $request->top_nav_color,
            'main_nav_color'     => $request->main_nav_color
        ]);

        return redirect()->back();
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
        $setting = Setting::findOrFail($id);

        return view('backpanel.settings.create', compact('setting'));
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
        $setting = Setting::find($id);

        if($request->hasFile('main_logo')){
            $setting->header_logo_center = $this->uploadSingleFile($request, $request->file('main_logo'));
        }
        if( $request->hasFile('logo_right')){
            $setting->header_logo_right = $this->uploadSingleFile($request, $request->file('logo_right'));
        }

        $setting->site_name = $request->site_title;
        $setting->site_name_nepali = $request->site_title_nepali;

        $setting->email      = $request->email;
        $setting->phone_number = $request->phone_number;
        $setting->phone_number_nepali = $request->phone_number_nepali;
        $setting->emergency_number = $request->emergency_number;
        $setting->emergency_number_nepali = $request->emergency_number_nepali;
        $setting->top_nav_color = $request->top_nav_color;
        $setting->main_nav_color = $request->main_nav_color;
        $setting->address        = $request->address;
        $setting->address_nepali   = $request->address_nepali;

        $setting->save();

        return redirect()->back()->with(['class' => 'success', 'message' => 'Setting succesfully updated']);   
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
