<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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
    return view('anasayfa');
});

Route::get('/İletişim', function () {
    return view('iletisim');
});
Route::get('/Hakkımızda', function () {
    return view('hakkimizda');
});
Route::post('/İletişim', [MessageController::class, 'store'])->name('messages.store');


