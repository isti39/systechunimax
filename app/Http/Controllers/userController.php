<?php

namespace App\Http\Controllers;
use App\General;
use App\Image;
use App\Service;
use App\Testimonial;

use Illuminate\Http\Request;

class userController extends Controller
{
    
    public function index()
    {
        $general = General::all();
        $image = Image::all()
        ->where('status','1');
        $service = Service::all()
        ->where('status','1');
        $testimonial = Testimonial::all()
        ->where('status','1');
        // foreach($data as $d)
        // {
        //     echo '<pre>';
        //     echo '<pre>'.$d;
        // }
        
        return view('user.view')->with([
            'image'=> $image,
            'general'=>$general,
            'services'=>$service,
            'testimonials'=>$testimonial
        ]);
    }
}
