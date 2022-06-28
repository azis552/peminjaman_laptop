<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/data_santri', function () {
    return view('data_santri');
})->name('data_santri');
Route::middleware(['auth:sanctum', 'verified'])->get('/data_laptop', function () {
    return view('data_laptop');
})->name('data_laptop');
Route::middleware(['auth:sanctum', 'verified'])->get('/peminjaman', function () {
    return view('peminjaman');
    
})->name('peminjaman');
Route::middleware(['auth:sanctum', 'verified'])->get('/peminjaman_blm', function () {
    return view('pem_blm_kembali');})->name('pem_blm_kembali');

    
Route::get('students/list', [App\Http\Controllers\StudentController::class, 'getStudents'])->name('students.list');
Route::get('students/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
Route::post('students/store', [App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::post('students/update', [App\Http\Controllers\StudentController::class, 'update'])->name('students.update');
Route::post('students/delete', [App\Http\Controllers\StudentController::class, 'destroy'])->name('students.delete');
Route::post('students/cetak_barcode', [App\Http\Controllers\StudentController::class, 'cetak_barcode'])->name('students.cetak_barcode');
// data laptop
Route::get('laptops/list', [App\Http\Controllers\LaptopController::class, 'getlaptops'])->name('laptops.list');
Route::get('laptops/pinjam/{id}', [App\Http\Controllers\LaptopController::class, 'getlaptopspinjam']);
Route::post('laptops/keluarFunc', [App\Http\Controllers\LaptopController::class, 'keluarFunc'])->name('laptops.keluar-lap');
Route::post('laptops/masukFunc', [App\Http\Controllers\LaptopController::class, 'masukFunc'])->name('laptops.masuk-lap');
Route::get('peminjaman/list', [App\Http\Controllers\PeminjamanController::class, 'getpeminjaman'])->name('peminjaman.list');
Route::get('pem_blm_kembali', [App\Http\Controllers\PeminjamanController::class, 'getpeminjaman_blm'])->name('peminjaman.blm');
