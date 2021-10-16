<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;



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
//     return view('welcome');
// });


Route::prefix('admin')->group(function(){
    Route::get('/', function(){
        return view('admin.index');
    });
});

Route::resource('user', UserController::class);

Route::resource('book', BookController::class);
Route::resource('pengarang', PengarangController::class);

//route CRUD
// Route::get('/pengarang','PengarangController@index');
// Route::get('/books','BookController@index');
