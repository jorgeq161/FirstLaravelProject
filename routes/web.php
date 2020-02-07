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
//all the routing done such as get,post,put
Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', 'ProjectsController@create');

Route::get('/list', function () {

    return view('list', [
        'projects' => App\Project::orderBy('id')->get()
    ]);
});

Route::get('/update/{project}', 'ProjectsController@edit');

Route::post('/add', 'ProjectsController@store');

Route::put('/update/{project}', 'ProjectsController@update');

Route::delete('/update/{project}', 'ProjectsController@destroy');
