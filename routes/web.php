<?php

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
    return redirect(route('Simonis | Home'));
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['permission:Beranda'], 'prefix' => 'home'], function () {
        Route::get('', [App\Http\Controllers\Simonis\Home::class, 'index'])->name('Simonis | Home');
    });

    // Awal Kurikulum
    Route::group(['middleware' => ['permission:[Kurikulum] Tahun Ajaran'], 'prefix' => 'academic-year'], function () {
        Route::get('', [App\Http\Controllers\Simonis\AcademicYear::class, 'index'])->name('Simonis | Academic Year');
    });

    Route::group(['middleware' => ['permission:[Kurikulum] Semester'], 'prefix' => 'authorization'], function () {
        Route::get('', [App\Http\Controllers\Simonis\Authorization::class, 'index'])->name('Simonis | Authorization');
    });
    // Akhir Kurikulum

    // Awal Manajemen Sistem
    Route::group(['middleware' => ['permission:[Manajemen Sistem] Menu'], 'prefix' => 'menu'], function () {
        Route::get('', [App\Http\Controllers\Simonis\Menu::class, 'index'])->name('Simonis | Menu');
    });

    Route::group(['middleware' => ['permission:[Manajemen Sistem] Hak Akses'], 'prefix' => 'authorization'], function () {
        Route::get('', [App\Http\Controllers\Simonis\Authorization::class, 'index'])->name('Simonis | Authorization');
    });
    // Akhir Manajemen Sistem

    // Awal Tabel
    Route::prefix('table')->group(function () {
        Route::prefix('menu')->group(function () {
            Route::get('', [App\Http\Controllers\Simonis\Menu::class, 'dt'])->name('Table | Simonis | Menu');
        });

        Route::prefix('authorization')->group(function () {
            Route::get('permission', [App\Http\Controllers\Simonis\Authorization::class, 'permission_dt'])->name('Table | Simonis | Authorization | Permission');
        });
    });
    // Akhir Tabel
});
