<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $data = Image::all();
        return view('admin.image.show')->with('data', $data);
    }
    public function create()
    {
        return view('admin.image.create');
    }
    public function store(Request $request)
    {
        $image = new Image;
        $image->status = $request->status;
        $img = $_FILES['filename'];
        $oldpath = $_FILES['filename']['tmp_name'];
        if(!$img['error']){
            $newpath ="uploads/".$_FILES['filename']['name'];
            move_uploaded_file($oldpath, $newpath);
            $image->imgpath = $img['name'];
        }
        $image->save();
        return redirect()->route('image.index');

    }
    public function show(Image $image)
    {
        //
    }
    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.image.edit')->with('data', $image);

    }
    public function update(Request $request, $id)
    {
        $image = Image::find($id);
        $image->status = $request->status;
        $img = $_FILES['filename'];
        $oldpath = $_FILES['filename']['tmp_name'];
        if(!$img['error']){
            $newpath ="uploads/".$_FILES['filename']['name'];
            move_uploaded_file($oldpath, $newpath);
            $image->imgpath = $img['name'];
        }
         $image->save();
         return redirect()->route('image.index');
    }
    public function destroy($id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->route('image.index');
    }
}
