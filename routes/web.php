<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Route::get('/product',[PagesController::class,'product']);

Route::get('/ourteams', function () {
    return view('ourteams');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});