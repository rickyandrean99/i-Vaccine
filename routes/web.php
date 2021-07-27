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

Route::get('/', 'ClientController@beranda')->name('beranda');
Route::get('/daftar', 'ClientController@daftar')->name('daftar');
Route::get('/masuk', 'ClientController@masuk')->name('masuk');
Route::get('/antrian', 'ClientController@antrian')->name('antrian');
Route::get('/pendaftaran-vaksin', 'ClientController@pendaftaranVaksin')->name('pendaftaran-vaksin');

Route::get('/penyelenggara/dashboard', 'PenyelenggaraController@dashboard')->name('dashboard-penyelenggara');
Route::get('/penyelenggara/edit', 'PenyelenggaraController@editData')->name('edit-data-penyelenggara');
Route::get('/penyelenggara/antrian', 'PenyelenggaraController@antrianVaksin')->name('antrian-vaksin-penyelenggara');
Route::get('/penyelenggara/rekap', 'PenyelenggaraController@rekapPeserta')->name('rekap-peserta-penyelenggara');
Route::get('/penyelenggara/vaksin', 'PenyelenggaraController@vaksin')->name('vaksin-penyelenggara');

Route::get('/pemerintah/dashboard', 'PemerintahController@dashboard')->name('dashboard-pemerintah');
Route::get('/pemerintah/penyelenggara', 'PemerintahController@penyelenggara')->name('penyelenggara-pemerintah');
Route::get('/pemerintah/rekap', 'PemerintahController@rekapPeserta')->name('rekap-peserta-pemerintah');
Route::get('/pemerintah/stok', 'PemerintahController@stokVaksin')->name('stok-vaksin-pemerintah');
Route::get('/pemerintah/distribusi', 'PemerintahController@distribusiVaksin')->name('distribusi-vaksin-pemerintah');