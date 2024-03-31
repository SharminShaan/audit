<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contents;
use App\Models\Category;
use App\Models\Sub_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Contents::where('subcats_id', '=', 8)->get();
        return view('backend.service.index', compact('data'));
    }

    public function create()
    {
        $datas = Sub_categories::where('cat_id', '=', 2)->get();
        return view('backend.service.create', compact('datas'));
    }

    public function store(Request $request)
    {
        $data = [];
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['name'] = $request->name;

        Contents::create($data);
        return redirect()->route('servicecon.index')->with('message', 'Insert Successfully!');
    }

    public function edit($id)
    {
        $data = Contents::findorfail($id);
        $catdatas = Category::get();
        $catdatas = Sub_categories::get();
        return view('backend.service.edit', compact('data', 'catdatas'));
    }

    public function update(Request $request, $id)
    {
        $data['category_id'] = $request->category_id;
        $data['subcats_id'] = $request->subcats_id;
        $data['name'] = $request->name;

        DB::table('contents')->where('id', $request->id)->update($data);

        return redirect()->route('servicecon.index')->with('message', 'Updated successfully');

    }


    public function destroy($id)
    {
        $data = Contents::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Deleted Successfully!');
    }
}
