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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){

	Route::get('/users', 'UsersController@index');

	Route::post('/users', 'UsersController@create'); 

	Route::get('users/{id}/delete', 'UsersController@delete');

	Route::get('users/{id}/edit', 'UsersController@editForm');

	Route::post('users/{id}', 'UsersController@edit');

	Route::get('/hello/{name}', function ($name) {
	    return view('hello',['name' => $name]);
	    // http://localhost:8000/hello/Ligiano
	});

	Route::post('/hello', function () {
		$test = $_POST['test'];
	    return view('hello',['name' => 'Ligiano', 'test' => $test]);
	    // http://localhost:8000/hello/Ligiano
	});	

	Route::get('/hellowithparameter/{name}', function ($name) {
	    return view('hello',['name' => $name]);
	    // http://localhost:8000/hellowithparameter/Ligiano
	});

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
