<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/{id}/{author}' , function($id , $au){
//     return $id . " Author ".$au; 
// }); 


Route::get('/' , function(){
    return view('welcome');
}) ; 

Route::get('/home' , 'HomeController@home')->name('home');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/login' , 'HomeController@login')->name('login'); 
Route::get('/about' ,'HomeController@about')->name('about');
Route::resource('/posts', 'PostController'); 
