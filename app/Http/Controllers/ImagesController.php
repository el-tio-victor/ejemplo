<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function index(){
        $images = Image::all();
        $images->each(function($images){
            $images->article;
        });
        return view('dashboard.images.index')->with('images',$images);
    }
}
