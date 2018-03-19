<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*Route::group(['prefix' => 'articles'],function(){
 Route::get('view/{id}',[
     'uses'=>'TestController@view',
     'as' => 'articlesView'
 ]);

});

/*Route::get('view/{article?}', function($article='vacio'){
    echo $article;
});*/


Route::group(['prefix' => 'dashboard','middleware'=>'auth'],function(){
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',[
        'uses'=>'UsersController@destroy',
        'as'=>'dashboard.users.destroy'
    ]);

    Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',
    ['uses'=>'CategoriesController@destroy',
    'as'=>'dashboard.categories.destroy']);

    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy',
        [
            'uses' => 'TagsController@destroy',
            'as' => 'dashboard.tags.destroy'
        ]
    );
    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy',
        [
            'uses' => 'ArticlesController@destroy',
            'as' => 'dashboard.articles.destroy'
        ]
    );

    Route::get('images',
        [
            'uses' => 'ImagesController@index',
            'as' => 'images.index'
        ]
    );
    
     Route::get("categories/{category_name}/searchCategory",[
        "uses" => "HomeController@searchCategory",
        "as"  => "home.search.category"
    ]);
  Route::get("tags/{id}/searchTag",[
        "uses" => "HomeController@searchTag",
        "as"  => "home.search.tag"
    ]);

   

});

Route::get('/dashboard',[function(){return view('dashboard.template.main');}])
->middleware('auth');

Auth::routes();



Route::get('/blog',[
    "uses" => "HomeController@index",
    "as"   => "blog"
]);

Route::get('/',[function(){
    return view('home.index.contentIndex');}
])->name('home');

Route::get('/blog/articles/{slug}',[
    "uses"=>"ArticlesController@viewArticle",
    "as"=>"blog.article"
]);



//Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard/logout', ['uses'=> 'Auth\LoginController@logout','as'=>'dashboard.logout']);
