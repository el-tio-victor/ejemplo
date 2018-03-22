<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function index(){
        $images = Image::all();
        $images= DB::table('images')
            ->join('article_image','article_image.image_id','=','images.id')
            ->join('articles','article_image.article_id','=','articles.id')
            ->select('images.name','articles.title')
            ->get();
        //dd($images);
        
       
      /*foreach($images as $image){
           $salida=$image->name;
           foreach($image->articles as $i){
               $salida=$salida.'....'.$i->title;
               dd($salida);
           }
       }*/
            
        
        //dd($images);
        return view('dashboard.blog.images.index')->with('images',$images);
    }
}
