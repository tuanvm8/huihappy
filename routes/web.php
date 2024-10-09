<?php

use App\Http\Controllers\UserProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(UserProductController::class)->group(function () {
    Route::get('/', 'getLogin')->name('login');
    Route::post('dang-nhap', 'postLogin')->name('login.submit');
    Route::get('logout', 'getLogOut')->name('logout');

    Route::get('trang-chu', 'dashboard')->name('user.dashboard');
    Route::get('danh-sach', 'create')->name('user.createCategory');
    Route::get('bao-cao', 'report')->name('user.report');
    Route::get('ds-hoi-vien-am-hui', 'listYinHui')->name('user.listYinHui');
    Route::get('chi-tiet', 'detail')->name('user.detail');
    Route::get('hoa-don', 'bill')->name('user.bill');
});
