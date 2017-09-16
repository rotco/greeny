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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

Route::group(['middleware' => ['web']], function () {
    Route::get('/','HomeController@index');
    Route::get('/admin','AdminController@index');
//Route::get('/create', function () {
//    return view('create');
//});
    Route::get('/mail',function (){
       $data = [
           'title'=>'Hi my dear friend how is everything ?',
           'body'=>'i would happy to hear from you if you can, please call me'
       ];
       Mail::send('emails.test',$data,function ($message){
           $message->to('rotoren@gmail.com')->subject('HEYYYYY');
       });
    });
    Route::resource('posts', 'PostsController');
//    Route::get('/posts/create','PostsController@create');

    Route::get('/getuser/{id}',function($id){
        $user=User::find($id);
        echo $user->email;
    } );
    Auth::routes();
});


//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/test','HomeController@test')->middleware('testMiddleware');

//Route::get('/isadmin','')