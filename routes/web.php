<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\FestivalController;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\UserController;



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class, 'getLogin'])->name('login');
    Route::post('login', [DashboardController::class, 'postLogin'])->name('login.post');
    Route::get('logout', [DashboardController::class, 'getLogOut'])->name('logout');

    Route::middleware([Authenticate::class])->group(function () {

        Route::controller(UserController::class)->prefix('user')->name('user.')->group(function () {
        Route::get('trang-chu', 'dashboard')->name('dashboard');
        Route::get('danh-sach', 'create')->name('createCategory');
        Route::get('bao-cao', 'report')->name('report');
        Route::get('ds-hoi-vien-am-hui', 'listYinHui')->name('listYinHui');
        Route::get('chi-tiet', 'detail')->name('detail');
        Route::get('hoa-don', 'bill')->name('bill');
        });
    });


    Route::apiResource('festivals', FestivalController::class);
});
