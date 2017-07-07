<?php

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone = NULL)
    {
        //echo Carbon::now($timezone)->toDateTimeString();
        $current_time  = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
         return view('timezones::time', compact('current_time'));
    }

}
