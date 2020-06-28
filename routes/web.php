<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello this is my frist post!',
        'my-second-post' => 'Hello this is my second post!'
    ];

    if (! array_key_exists($post,$posts)){
        abort(404,'Sorry that post is not found.');
    }

    return view('post',[
        'post' => $posts[$post] ?? 'Nothing here yet.'
    ]);
});*/

Route::get('posts/{post}','PostsController@show');

Route::get('/',function (){
    return view('welcome');
});

Route::get('/about',function (){
    $articles=App\Subscriber::take(3)->latest()->get();

    return view('about',[
        'subscribers'=>$articles
    ]);
});
Route::get('/subscribers', 'SuscribersController@index');
Route::post('/subscribers', 'SuscribersController@store');
Route::get('/subscribers/create','SuscribersController@create');
Route::get('/subscribers/{article}','SuscribersController@show')->name('subscribers.show');
Route::get('/subscribers/{article}/edit','SuscribersController@edit');
Route::put('/subscribers/{article}','SuscribersController@update');
