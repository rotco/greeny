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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/create', function () {
//    return view('create');
//});

Route::resource('posts', 'PostsController');

Route::get('/getuser/{id}',function($id){
    $user=User::find($id);
    echo $user->email;
} );
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
