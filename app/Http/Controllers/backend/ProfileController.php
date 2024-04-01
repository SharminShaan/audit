<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $data = Contents::findOrFail(9);
        return view('backend.about.profile',compact('data'));
    }

    public function update(Request $request){
        $data = Contents::findOrFail(9);
        $data->category_id = $request->category_id;
        $data->subcats_id = $request->subcats_id;
        $data->title = $request->title;
        $data->short_description = $request->short_description;
        $data->long_description = $request->long_description;
        $data->file_upload = $request->file_upload;
        $data->youtube = $request->youtube;
        $data->file_upload = $request->file_upload;
        $data->file_upload = $request->file_upload;

        if ($request->file('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image1->move(public_path('/backendsite/images/'), $imageName);
            $data->image = $imageName;
        } else {
            unset($data->image);
        }

        if ($request->file('image2')) {
            $rand = rand(10,100);
            $imageName = time() . $rand. '.' . $request->image2->extension();
            $request->image2->move(public_path('/backendsite/images/'), $imageName);
            $data->image2 = $imageName;
        } else {
            unset($data->image2);
        }

        if ($request->file('image3')) {
            $rand = rand(10,100);
            $imageName = time() . $rand. '.' . $request->image3->extension();
            $request->image3->move(public_path('/backendsite/images/'), $imageName);
            $data->image3 = $imageName;
        } else {
            unset($data->image3);
        }


        $data->save();
        return redirect()->back();
    }
}
