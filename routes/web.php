<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;

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

Route::get('/Projelerimiz', function () {
    return view('projelerimiz');
});

// Route to display all projects (Gallery)
Route::get('/Projelerimiz', [ProjectController::class, 'index'])->name('projects.index');

// Route to display a single project's details
Route::get('/Projelerimiz/{id}', [ProjectController::class, 'show'])->name('projects.show');
