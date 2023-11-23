<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // ROUTE FRONTEND
    Route::get('/', 'Frontend\BerandaController@index')->name('frontend.home');
    Route::get('tentang', 'Frontend\TentangController@index')->name('frontend.tentang');
    Route::get('kategoris', 'Frontend\KategoriController@index')->name('frontend.kategori');
    Route::get('kontak', 'Frontend\KontakController@index')->name('frontend.kontak');

    Route::post('pesan', 'Frontend\KontakController@store')->name('frontend.pesan');

    Route::get('show-kategori/{slug_kategori}', 'Frontend\KategoriController@show')->name('frontend.show.kategori');
    Route::get('/detail-buku', 'Frontend\BukuController@show')->name('detailbuku.show');
    Route::get('/buku/{category}', [BukuController::class, 'show'])->name('buku.show');

    // SEMUA YANG ADA DI DALAM GROUP MIDDLEWARE ITU HARUS MELALUI PROSES LOGIN
    Route::group(['middleware' => ['auth']], function () {
        //Users
        Route::get('users', 'Backend\UserBackendController@index')->name('backend-index-user');
        Route::get('tambah_user', 'Backend\UserBackendController@create')->name('backend-create-user');
        Route::POST('store_user', 'Backend\UserBackendController@store')->name('backend-store-user');
        Route::get('/edit_user/{id}', 'Backend\UserBackendController@edit')->name('backend-edit-user');
        Route::post('/update_user/{id}', 'Backend\UserBackendController@update')->name('backend-update-user');
        Route::get('/delete_user/{id}', 'Backend\UserBackendController@destroy')->name('backend-delete-user');

        // ROUTE BACKEND
        Route::get('home', 'Backend\HomeController@index')->name('backend.home');

        // Route Kategori
        Route::get('kategori', 'Backend\KategoriController@index')->name('backend.kategori');
        Route::get('tambah-kategori', 'Backend\KategoriController@create')->name('backend.tambah.kategori');
        Route::post('/store-kategori', 'Backend\KategoriController@store')->name('store_kategori');
        Route::get('delete-kategori/{id}', 'Backend\KategoriController@destroy')->name('delete_kategori');
        Route::get('edit-kategori/{id}', 'Backend\KategoriController@edit')->name('edit_kategori');
        Route::post('/update-kategori/{id}', 'Backend\KategoriController@update')->name('update_kategori');

         // Route Peminjam
         Route::get('peminjam', 'Backend\PeminjamController@index')->name('backend.peminjam');
         Route::get('tambah-peminjam', 'Backend\PeminjamController@create')->name('backend.tambah.peminjam');
         Route::post('/store-peminjam', 'Backend\PeminjamController@store')->name('store_peminjam');
         Route::get('delete-peminjam/{id}', 'Backend\PeminjamController@destroy')->name('delete_peminjam');
         Route::get('edit-peminjam/{id}', 'Backend\PeminjamController@edit')->name('edit_peminjam');
         Route::post('/update-peminjam/{id}', 'Backend\PeminjamController@update')->name('update_peminjam');

         // Route Konfigurasi
        Route::get('konfigurasi', 'Backend\KonfigurasiController@index')->name('backend-index-konfigurasi');
        Route::get('tambah-konfigurasi', 'Backend\KonfigurasiController@create')->name('backend.tambah.konfigurasi');
        Route::post('/store-konfigurasi', 'Backend\KonfigurasiController@store')->name('store_konfigurasi');
        Route::get('delete-konfigurasi/{id}', 'Backend\KonfigurasiController@destroy')->name('delete_konfigurasi');
        Route::get('edit-konfigurasi/{id}', 'Backend\KonfigurasiController@edit')->name('edit_konfigurasi');
        Route::post('/update-konfigurasi/{id}', 'Backend\KonfigurasiController@update')->name('update_konfigurasi');

        // Route Buku
        Route::get('buku', 'Backend\BukuController@index')->name('backend.buku');
        Route::get('create_buku', 'Backend\BukuController@create')->name('backend-buku-create');
        Route::post('store_buku', 'Backend\BukuController@store')->name('backend-buku-store');
        Route::get('update_buku', 'Backend\BukuController@update')->name('backend.update_buku');

        // Route Penulis
        Route::get('penulis', 'Backend\PenulisController@index')->name('backend.penulis');
        Route::get('create_penulis', 'Backend\PenulisController@create')->name('backend.create_penulis');
        Route::post('store_penulis', 'Backend\PenulisController@store')->name('backend.store_penulis');
        Route::get('edit_penulis/{id}', 'Backend\PenulisController@edit')->name('backend.edit_penulis');
        Route::get('delete_penulis/{id}', 'Backend\PenulisController@destroy')->name('backend.delete_penulis');
        Route::post('update_penulis/{id}', 'Backend\PenulisController@update')->name('backend.update_penulis');
        Route::get('show_penulis/{id}', 'Backend\PenulisController@show')->name('backend.show_penulis');
      
         // Route Pesan
         Route::get('pesan', 'Backend\PesanController@index')->name('backend-index-pesan');
         Route::get('delete-pesan/{id}', 'Backend\PesanController@destroy')->name('delete_pesan');
    });
});

Auth::routes();
