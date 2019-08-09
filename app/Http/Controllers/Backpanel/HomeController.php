<?php

namespace App\Http\Controllers\Backpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Analytics;
use Spatie\Analytics\Period;


class HomeController extends Controller
{
    //
    public function index()
    {
    	
    	return view('backpanel.index');
    }
}
