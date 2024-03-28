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
        // return view('backend.themeoptions.index');
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

        // if($request->file('logo')){
        //     $file = $request->file('logo');
        //     $file_extension = $file->getClientOriginalExtension();
        //     $random_no = str::random(12);
        //     $file_name = $random_no.'.'.$file_extension;
        //     $destination_path = public_path().'/backendsite/images';
        //     $request->file('logo')->move($destination_path,$file_name);
        //     $seeting->logo= $file_name;
        // }
        // $request->validate([
        //     'logo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        // ]);

        if ($request->file('logo')) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('/backendsite/images/'), $imageName);
            $seeting->logo = $imageName;
        } else {
            unset($seeting->logo);
        }

        // if ($image = $request->file('logo')) {
        //     $destinationPath = '/backendsite/images/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $seeting->logo = $profileImage;
        //     // dd($seeting->logo);
        // } else {
        //     unset($seeting->logo );
        // }


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
