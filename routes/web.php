<?php
use App\Http\Controllers\imagecontroller;
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
route::get('/insert-info',[imagecontroller::class,'insert']);
route::post('/insert-info',[imagecontroller::class,'store']);
route::get('/data-show',[imagecontroller::class,'viewdata']);
route::get('edit-data/{$id}',[imagecontroller::class,'edit']);
route::get('/payment',[imagecontroller::class,'payment']);

