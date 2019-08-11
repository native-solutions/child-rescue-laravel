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
		$all_visit_log = \VisitLog::all();

		$total_visit = $all_visit_log->count();
		$unique_visit = $all_visit_log->unique('ip')->count();

    	return view('backpanel.index', compact('total_visit', 'unique_visit'));
    }
}
