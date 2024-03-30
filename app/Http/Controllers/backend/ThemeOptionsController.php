<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\ThemeOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ThemeOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seeting = ThemeOptions::where('id', '=', 1)->first();
        return view('backend.themeoptions.index',compact('seeting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $seeting = ThemeOptions::findOrFail(1);
        $seeting->sitename = $request->sitename;
        $seeting->email = $request->email;
        $seeting->phone = $request->phone;
        $seeting->address = $request->address;
        $seeting->paragraph = $request->paragraph;
        $seeting->opening = $request->opening;
        $seeting->facebook = $request->facebook;
        $seeting->linkedin = $request->linkedin;
        $seeting->twitter = $request->twitter;
        $seeting->googleplus = $request->googleplus;
        $seeting->youtube = $request->youtube;
        $seeting->vmap = $request->vmap;


        if ($request->file('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/images/'), $imageName);
            $seeting->logo = $imageName;
        } else {
            unset($seeting->logo);
        }


        $seeting->save();
        return redirect()->back();
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
