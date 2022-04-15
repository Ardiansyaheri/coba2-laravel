<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/siswa', [StudentController::class, 'index'])->name('siswa');

Route::get('/tambahsiswa', [StudentController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertdata', [StudentController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [StudentController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [StudentController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [StudentController::class, 'deletedata'])->name('deletedata');

