<?php
namespace App\Http\middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create',function () {
    return view('layout/create');
});
Route::post('/create',function () {
    return view('layout/create');
});
Route::get('/serc', function () {
    return view('layout/find');
});
Route::post('/serc', function () {
    return view('layout/find');
});
Route::get('/upd', function () {
    return view('layout/upd');
});
Route::post('/upd', function () {
    return view('layout/upd');
});
Route::get('/delete', function () {
    return view('layout/delete');
});