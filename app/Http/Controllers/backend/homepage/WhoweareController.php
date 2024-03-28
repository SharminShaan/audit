<?php

namespace App\Http\Controllers\backend\homepage;

use App\Http\Controllers\Controller;
use App\Models\homepage\Whoweare;
use Illuminate\Http\Request;

class WhoweareController extends Controller
{
    public function index()
    {
        // $whoweare = Whoweare::all();
        $whoweare = Whoweare::findOrFail(1);
        return view('backend.homepages.whoweare',compact('whoweare'));
    }


    public function update(Request $request){
        $whoweare = Whoweare::findOrFail(1);
        // dd($whoweare);
        $whoweare->subheading = $request->subheading;
        $whoweare->heading = $request->heading;
        $whoweare->paragraph = $request->paragraph;
        $whoweare->list1 = $request->list1;
        $whoweare->list2 = $request->list2;
        $whoweare->list3 = $request->list3;
        $whoweare->list4 = $request->list4;
        $whoweare->bottomparagraph = $request->bottomparagraph;
        $whoweare->years = $request->years;
        $whoweare->yearsparagraph = $request->yearsparagraph;

        // $imageName = time() . '.' . $request->image1->extension();
        // $request->image1->move(public_path('/backendsite/images/homepage/'), $imageName);
        // $whoweare->image1 = $imageName;

        // $imageName2 = time() . '.' . $request->image2->extension();
        // $request->image2->move(public_path('/backendsite/images/homepage/'), $imageName2);
        // $whoweare->image2 = $imageName2;

        if ($image = $request->file('image1')) {
            $destinationPath = '/backendsite/images/homepage/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $input['image1'] = "$profileImage";
            $whoweare->image1 = $profileImage;
        } else {
            // unset($input['image1']);
            unset($whoweare->image1);
        }

        if ($image = $request->file('image2')) {
            $destinationPath = '/backendsite/images/homepage/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $whoweare->image2 = $profileImage;
        } else {
            unset($whoweare->image2);
        }

        $whoweare->save();
        return redirect()->back();
    }
}
