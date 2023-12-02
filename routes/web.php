<?php

use App\Http\Controllers\KonsultasiController;
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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin-home', 'HomeController@admin')->name('admin-home');
route::get('tentang',function(){
    return view('tentang');
});
route::get('spesialis','HomeController@spesialis');
route::get('pasien','PasienController@index');
Route::get('/gejala', 'GejalaController@index');




#konsutasi
Route::get('/konsultas', [KonsultasiController::class, 'pasienForm'])->name('pasienForm');
Route::post('/konsultasi', [KonsultasiController::class, 'storePasien'])->name('storePasien');
Route::post('/konsultasi/diagnosa', [KonsultasiController::class, 'diagnosa'])->name('diagnosa');
Route::get('/konsultas/{pasien_id}/hasil', [KonsultasiController::class, 'hasilDiagnosa'])->name('hasilDiagnosa');
// Route::get('/konsultasi', 'KonsultasiController@pasienForm')->name('pasienForm');
// Route::post('/konsultasi', 'KonsultasiController@storePasien')->name('storePasien');
// Route::post('/konsulltasi/diagnosa', 'KonsultasiController@diagnosa')->name('diagnosa');
// Route::get('/konsultasi/{pasien_id}/hasil', 'KonsultasiController@hasilDiagnosa')->name('hasilDiagnosa');

