<?php
use App\Http\Controllers\studentcontroller;
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
route::get('/insert-info',[studentcontroller::class,'insert']);
route::post('/insert-info',[istudentcontroller::class,'store']);
route::get('/data-show',[istudentcontroller::class,'viewdata']);
route::get('edit-data/{$id}',[studentcontroller::class,'edit']);
route::get('/payment',[studentcontroller::class,'payment']);
route::post('/payment',[studentcontroller::class,'paymentstore']);
route::get('/admin',[studentcontroller::class,'admin']);
route::get('/std',[studentecontroller::class,'stddash']);
route::get('/course',[studentecontroller::class,'addcourse']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
