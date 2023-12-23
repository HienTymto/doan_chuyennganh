<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\BaiVietController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\TintucController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [HomeController::class,'index']);
Route::get('/', [BaiVietController::class,'show'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified' , 'admin'])->group(function(){
    Route::get('admin', [TintucController::class,'danhsach'])->name('admin');
    Route::post('admin/thembaiviet', [TintucController::class,'store'])->name('thembaiviet');
    Route::get('admin/thembaiviet', [TintucController::class,'show'])->name('thembaiviet');     
    Route::get('admin/danhsach',[TintucController::class,'danhsach'])->name('danhsach');
    Route::get('/admin/SuabaiViet/{id}',[TintucController::class,'edit'])->name('edit');
    Route::post('/admin/SuabaiViet/{id}',[TintucController::class,'update'])->name('edit');
    Route::get('/baiviet.delete/{id}',[TintucController::class,'destroy'])->name('delete');
});

require __DIR__.'/auth.php';
