<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Service::all();
        return view('admin.service.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->title = $request->title; 
        $service->description = $request->description;
        $service->status = $request->status;
        $img = $_FILES['filename'];
        $oldpath = $_FILES['filename']['tmp_name'];
        if(!$img['error']){
            $newpath ="uploads/".$_FILES['filename']['name'];
            move_uploaded_file($oldpath, $newpath);
            $service->imgpath = $img['name'];
        }
        $service->save();
        return redirect()->route('service.index');
    }
    public function show(Service $service)
    {
        //
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit')->with('data', $service);

    }
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->status = $request->status;
        
        $img = $_FILES['filename'];
        $oldpath = $_FILES['filename']['tmp_name'];
        if(!$img['error']){
            $newpath ="uploads/".$_FILES['filename']['name'];
            move_uploaded_file($oldpath, $newpath);
            $service->imgpath = $img['name'];
        }
         $service->save();
         return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index');
    }
}
