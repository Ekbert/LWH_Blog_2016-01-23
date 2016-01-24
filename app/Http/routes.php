<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	//throw new Exception("Tracy work!!!");
	//return 'welcome';
    return view('index');
});



Route::get('/hello', function () {

	//throw new Exception("Tracy work!!!");
	//return 'welcome';
    return view('hello.world.hello');
});


Route::get('/about', function () {

	//throw new Exception("Tracy work!!!");
	//return 'welcome';
    return view('about');
});


Route::get('/services', function () {

	//throw new Exception("Tracy work!!!");
	//return 'welcome';
    return view('services');
});


Route::get('/portfolio', function () {

	//throw new Exception("Tracy work!!!");
	//return 'welcome';
    return view('portfolio');
});


Route::get('/contact', function () {

	//throw new Exception("Tracy work!!!");
	//return 'welcome';
    return view('contact');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
