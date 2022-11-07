<?php

use App\Http\Controllers\MembreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' , [MembreController::class, 'membres'])->name('home');
Route::get('/create', [MembreController::class ,'create'])->name('create');
Route::get('/femmes', [MembreController::class ,'femmes'])->name('femmes');
Route::get('/hommes', [MembreController::class ,'hommes'])->name('hommes');
Route::post('/store/membre', [MembreController::class, 'store'])->name('store.membre');
Route::delete('/delete/{id}', [MembreController::class, 'delete']);