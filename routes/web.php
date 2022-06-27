<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SlideController;

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

Route::get('/', [SlideController::class, 'index']);
Route::get('/slides/create', [SlideController::class, 'create']);
Route::post('/slides', [SlideController::class, 'store']);
Route::get('/slides/{$id}', [SlideController::class, 'show']);

Route::get('/sobre', function () {
    return view('about');
});

Route::get('/servicos', function () {
    return view('services');
});



Route::get('/contactos', function () {
    return view('contact');
});
