<?php

use App\Http\Controllers\C_titles;
use App\Http\Controllers\MyAuth;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
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

Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::get('/logout', [MyAuth::class, 'logout_process']);
Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);

Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
    // auth first
});

Route::get('/my-controller',[MyController::class,'index'] );
Route::get('/my-controller2','App\Http\Controllers\MyController@index');
Route::resource('/my-controller3', MyController::class);
//ใข้resource
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('my-controller4', "MyController@index");
    Route::post('my-controller4-post', 'MyController@store');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-route', function(){
    // return view('myroute');
    //     key    =>  Value
    return view('myfolder.mypage');
});

Route::post('/my-route', function (Request $req) {
    echo $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});
