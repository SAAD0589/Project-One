<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostConstroller;
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

Route::get('/index',[PostConstroller::class,'index'])->name('Home');

Route::get('/create',[PostConstroller::class,'create'])->name('CreatPost');

Route::get('/Post',[PostConstroller::class,'show'])->name('Post');
Route::get('/edite',[PostConstroller::class,'edite']);
Route::post('/createpost',[PostConstroller::class,'store']);

Route::get('/show-pst/{id}',[PostConstroller::class,'afficher'])->name('show.post');

Route::get('/Post/{id}/edite',[PostConstroller::class,'edite'])->name('edite');

Route::put('/update/{id}',[PostConstroller::class,'update']);

Route::get('/delete/{id}',[PostConstroller::class,'destroy'])->name('delete');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
