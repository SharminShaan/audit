<?php

namespace App\Http\Controllers;

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
    {    $seeting = ThemeOptions::findOrFail(1);
        $slider = Slider::all();
        return view('frontend.index',compact('seeting','slider'));
    }
}
