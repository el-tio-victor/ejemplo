<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Category;

use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        Carbon::setLocale('es');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id','Des')->get();
        $articles = $this->relations($articles);
        return view('home.blog.partials.contentArticles')
            ->with('articles',$articles);
    }

    public function searchCategory($category_name){
        /*Buscar articulos por categoria */
        $articles = \App\Article::where('category_id',$category_name)->get();
        return view('home.partials.contentArticles')
            ->with('articles',$articles);
        
    }
    public function searchTag($id){
        //$tag = \App\Tag::where('category_id',$id)->get();
        $tags = \App\Tag::where('id','=',$id)->first();
        $articles= $tags->articles()->get();
        /*$articles->each(function($articles){
            $articles->category;
        });*/
        return view('home.partials.contentArticles')
            ->with('articles',$articles); 
    }
    public function relations($rel){
        return $rel->each(function($rel){
            $rel->category;
            $rel->tags;
            $rel->images;
            
        });
    }
    public function relationTag(){
        $tags = \App\Tag::where('id','=',$id)->first();
        return $rel= $tags->articles()->get();
    }
    
}
