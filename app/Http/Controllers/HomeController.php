<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Article;
use App\Category;

use Carbon\Carbon;
use App\Http\Requests\ContactRequest;

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
        $articles = Article::orderBy('id','Des')->simplePaginate(4);
        
        return view('home.blog.partials.contentArticles')
            ->with('articles',$articles);
    }

    public function searchCategory($category_name){
        /*Buscar articulos por categoria */
        $articles = \App\Article::where('category_id',$category_name)->simplePaginate();
        
        return view('home.blog.partials.contentArticles')
            ->with('articles',$articles);
        
    }
    public function searchTag($id){
        //$tag = \App\Tag::where('category_id',$id)->get();
        $tags = \App\Tag::where('id','=',$id)->first();
        $articles= $tags->articles()->simplePaginate();
        /*$articles->each(function($articles){
            $articles->category;
        });*/
        return view('home.blog.partials.contentArticles')
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

    public function msg(ContactRequest $r){
        
        if($r->ajax()){
            
            Mail::to('hola@gomez-site.mx')->send(new \App\Mail\Message($r->msg,$r->name,$r->mail));

        }
        
    }
    
}
