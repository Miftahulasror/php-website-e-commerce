<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'welcome', ['nama' => 'Kopi SUG Kenangan']);
// Route::get('/', [AsrorCtrl::class, 'home']);
// Route::get('/about', [AsrorCtrl::class, 'about']);
// Route::get('/contact', [AsrorCtrl::class, 'contact']);

Route::get('/','AsrorCtrl@home');
Route::get('/about','AsrorCtrl@about');
Route::get('/contact','AsrorCtrl@contact');
Route::get('/produk', 'AsrorCtrl@produk');

// Route::view('/','home');

// Route::get('/about/{id?}', function ($id=null) {
//     return "About Us (Kopi SUG Kenangan), ".$id;
// });

Route::redirect('/newpage','/produk');
Route::get('/dash', 'AdminCtrl@dash');
Route::get('/barang', 'BarangCtrl@tampil');

Route::post('/barang/tambah', 'BarangCtrl@add');

Route::post('/barang/update', 'BarangCtrl@update');

Route::post('/barang/delete', 'BarangCtrl@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
 });
