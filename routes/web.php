<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProgramController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//no 1

Route::get('/home',[HomeController::class,'index']);

//no 2

Route::prefix('product')->group(function () {

    Route::get('/', [ProductController::class, 'product'] );
});
Route::prefix('product')->group(function () {

    Route::get('/{id}', [ProductController::class, 'products'] );
});

//no 3
Route::get('/news/{name?}', function ($name = null) {
    if($name){
        echo '<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19>News '.$name.'</a>';
    }else{
        echo '<a href=https://www.educastudio.com/news>Home</a> <br> <br> <a href=http://127.0.0.1:8000/news/covid>Covid</a> ';

    }
   });

//no 4
Route::prefix('program')->group(function () {

    Route::get('/', [ListProgramController::class, 'list'] );
});

Route::prefix('program')->group(function () {

    Route::get('/{id}', [ListProgramController::class, 'list'] );
});

//no 5
Route::get('/aboutus', function(){
    return '<a href=https://www.educastudio.com/about-us>https://www.educastudio.com/about-us</a>';
});

//no 6
Route::resource('contactus', ContactUsController::class);
