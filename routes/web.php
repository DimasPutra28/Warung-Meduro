<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/shop', function () {
//     return view('shop');
// });


//SIGN IN UP
Route::get('/login',[SignController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[SignController::class,'authenticate'])->middleware('guest');
Route::get('/Register',[SignController::class,'index1'])->middleware('guest');
Route::post('/Register',[SignController::class,'store'])->middleware('guest');
Route::post('/logout',[SignController::class,'logout'])->middleware('auth');


//dashboard admin home
Route::get('/admin',[HomeController::class,'index'])->middleware('auth');
Route::get('/history',[HomeController::class,'history'])->middleware('auth');

//dashboard home user
Route::get('/',[HomeController::class,'home']) ;
Route::get('/shop',[HomeController::class,'shop'])->middleware('auth');
// Route::post('/shop/addToCart',[HomeController::class,'belanja']);

// halaman
Route::get('/kategori',[KategoriController::class,'index'])->middleware('auth');
Route::get('/kategori/create',[KategoriController::class,'create'])->middleware('auth');
Route::post('/kategori/store',[KategoriController::class,'store'])->middleware('auth');
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit'])->middleware('auth');
Route::put('/kategori/{id}',[KategoriController::class,'update'])->middleware('auth');
Route::delete('/kategori/{id}',[KategoriController::class,'destroy'])->middleware('auth');

//
Route::get('/adminbarang',[BarangController::class,'indexbrg'])->middleware('auth');
Route::post('/adminbrg/store',[BarangController::class,'storebrg'])->middleware('auth');
Route::put('/adminbarang/{id}',[BarangController::class,'updatebrg'])->middleware('auth');
Route::delete('/adminbarang/{id}',[BarangController::class,'hpsbrg'])->middleware('auth');



