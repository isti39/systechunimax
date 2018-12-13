<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GeneralController extends Controller
{
    public function index()
    {
        $data = General::all();
        return view('admin.general')->with('data', $data);
    }

    public function create()
    {}

    public function store(Request $request)
    {}

    public function show(General $general)
    {}

    public function edit($id)
    {
        $data = General::findOrFail($id);
        return view('admin.general.edit')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
        $general = General::find($id);
        $general->company_name = $request->company_name;
        $general->founder = $request->founder;
        $general->about = $request->about;
        $general->mission = $request->mission;
        $general->vision = $request->vision;
        $general->full_address = $request->full_address;
        $general->copyright = $request->copyright;
        $general->facebook = $request->facebook;
        $general->google = $request->google;
        $general->twitter = $request->twitter;
        $general->linkdin = $request->linkdin;
        
        $logo = $_FILES['filename'];
        $oldpath = $_FILES['filename']['tmp_name'];
        
        if(!$logo['error']){
            $newpath ="uploads/".$_FILES['filename']['name'];
            move_uploaded_file($oldpath, $newpath);
            $general->logopath = $logo['name'];
        }
        $general->save();
        // return view('admin.general')->with('data', $data);
        return redirect()->route('general.index');

    }

    public function destroy(General $general)
    {}
}
