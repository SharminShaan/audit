<?php

namespace App\Http\Controllers;

use App\Models\homepage\Whoweare;
use App\Models\Slider;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $setting = ThemeOptions::findOrFail(1);
        $slider = Slider::all();
        $Whoweare = Whoweare::findOrFail(1);
        // $frontendMaster = view('frontend.layouts.master', compact('setting'));
        return view('frontend.index', compact('setting', 'slider', 'Whoweare' ));
    }
}
