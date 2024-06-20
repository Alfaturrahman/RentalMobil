<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;

/*
|--------------------------------------------------------------------------
| Rute Web
|--------------------------------------------------------------------------
|
| Di sini adalah tempat Anda dapat mendaftarkan rute web untuk aplikasi Anda.
| Rute-rute ini dimuat oleh RouteServiceProvider dan semua dari mereka akan
| ditetapkan ke grup middleware "web". Buatlah sesuatu yang hebat!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'PageController@home')->name('home.index');

    // Rute mobil
    Route::get('/mobil', 'CarController@index')->name('car.index');
    Route::get('/mobil/{id}', 'CarController@show')->name('car.show');
    
    // Rute tentang
    // Route untuk halaman tentang
    Route::get('/tentang', 'PageController@showAbout')->name('about.show');

    // Route untuk halaman kontak
    Route::get('/kontak', 'PageController@showContact')->name('contacts.show');
    
    Route::group(['middleware' => ['guest']], function () {
        // Rute pendaftaran
        Route::get('/pendaftaran', 'AuthController@show_register')->name('register.show');
        Route::post('/pendaftaran', 'AuthController@register')->name('register.perform');
        
        // Rute login
        Route::get('/masuk', 'AuthController@show_login')->name('login.show');
        Route::post('/masuk', 'AuthController@login')->name('login.perform');
    });
    
    Route::group(['middleware' => ['auth']], function () {
        
        // Rute logout
        Route::get('/keluar', 'AuthController@logout')->name('logout.perform');

        // Rute pengguna
        Route::get('/profil', 'UserController@show')->name('user.show');
        
        // Rute sewa
        Route::get('/riwayat', 'RentController@index')->name('rent.index');
        Route::post('/mobil/{id}/sewa', 'RentController@store')->name('rent.store');
        Route::get('/sewa/hapus/{id}', 'RentController@destroy')->name('rent.destroy');
    });


    Route::group(['prefix' => 'admin'], function () {
        // Rute pendaftaran
        Route::get('/pendaftaran', 'AdminAuthController@show_register')->name('admin.register.show');
        Route::post('/pendaftaran', 'AdminAuthController@register')->name('admin.register.perform');

        // Rute login
        Route::get('/masuk', 'AdminAuthController@show_login')->name('admin.login.show');
        Route::post('/masuk', 'AdminAuthController@login')->name('admin.login.perform');

        Route::group(['middleware' => ['adminauth']], function () {
            // Rute logout
            Route::get('/keluar', 'AdminAuthController@logout')->name('admin.logout.perform');

            // Halaman admin
            
            Route::get('/', 'AdminController@index')->name('admin.home');

            // Mobil admin
            Route::get('/mobil', 'CarController@index')->name('admin.car.index');
            Route::get('/mobil/{id}', 'CarController@show')->where('id', '[0-9]+')->name('admin.car.show');
            Route::get('/mobil/buat', 'CarController@create')->name('admin.car.create');
            Route::post('/mobil/buat', 'CarController@store')->name('admin.car.store');
            /**/Route::get('/mobil/edit/{id}', 'CarController@edit')->name('admin.car.edit');
            /**/Route::put('/mobil/edit/{id}', 'CarController@update')->name('admin.car.update');
            Route::delete('/mobil/hapus/{id}', 'CarController@destroy')->name('admin.car.destroy');

            // Sewa admin
            Route::get('/sewa', 'RentController@index')->name('admin.rent.index');
            Route::get('/sewa/{id}', 'RentController@show')->where('id', '[0-9]+')->name('admin.rent.show');
            Route::get('/sewa/edit/{id}', 'RentController@edit')->where('id', '[0-9]+')->name('admin.rent.edit');
            /**/Route::put('/sewa/edit/{id}', 'RentController@update')->where('id', '[0-9]+')->name('admin.rent.update');
            Route::patch('admin/rent/update-status/{id}/{status}', [RentController::class, 'updateStatus'])->name('admin.rent.update-status');
            Route::patch('admin/rent/update-description/{id}', [RentController::class, 'updateDescription'])->name('admin.rent.update-description');
            Route::delete('/sewa/hapus/{id}', 'RentController@destroy')->where('id', '[0-9]+')->name('admin.rent.destroy');


            // Pengguna admin
            Route::get('/pengguna', 'UserController@index')->name('admin.user.index');
            Route::get('/pengguna/{id}', 'UserController@show')->name('admin.user.show');
            Route::get('/pengguna/edit/{id}', 'UserController@edit')->name('admin.user.edit');
            Route::put('/pengguna/edit/{id}', 'UserController@update')->name('admin.user.update');
        });
    });
});
