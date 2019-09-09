<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller  
{
    function imageLoop(){
        $images = \File::allFiles(public_path('image'));
        //dd($images);    
        return view('pages.gallery')->with('images', $images);
    }
}
