<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;







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
Route::get('/contact', function () {
    return view('malaria/contact');
});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/admin-home', [HomeController::class, 'admin'])->name('admin-home');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin-home', 'HomeController@admin')->name('admin-home');
route::get('tentang',function(){
    return view('tentang');
});
route::get('spesialis','HomeController@spesialis');
route::get('pasien','PasienController@index');
Route::get('/gejala', 'GejalaController@index');


// Route::get('/login', [AuthLoginController::class,'index'])->name('login');

Route::group(["namespace" =>"App\Http\Controllers\Auth"], function(){
    Route::get('/', 'LoginController@index')->name('index');
    Route::post('/', 'LoginController@post')->name('post');

    Route::group(["as"=>"register.", "prefix"=>"register"], function(){
        Route::get("/", "RegisterController@index")->name('index');
        Route::post("/", "RegisterController@post")->name('post');
    });

    Route::get('/logout', 'LogoutController@logout')->name("logout");
});

#konsutasi

Route::get('/konsultas', [KonsultasiController::class, 'pasienForm'])->name('pasienForm');
Route::get('/konsultasi', [KonsultasiController::class, 'storePasien'])->name('storePasien');
Route::post('/konsultasi/diagnosa', [KonsultasiController::class, 'diagnosa'])->name('diagnosa');
Route::get('/konsultas/{pasien_id}/hasil', [KonsultasiController::class, 'hasilDiagnosa'])->name('hasilDiagnosa');
// Route::get('/konsultasi', 'KonsultasiController@pasienForm')->name('pasienForm');
// Route::post('/konsultasi', 'KonsultasiController@storePasien')->name('storePasien');
// Route::post('/konsulltasi/diagnosa', 'KonsultasiController@diagnosa')->name('diagnosa');
// Route::get('/konsultasi/{pasien_id}/hasil', 'KonsultasiController@hasilDiagnosa')->name('hasilDiagnosa');

