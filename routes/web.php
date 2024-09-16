<?php
use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController;

Route::get('/system/home', [LoginController::class, 'checkLogin'])->name('checkLogin');
Route::post('/login/checkLogin_client', [LoginController::class, 'checkLogin_client']);
Route::get('/system/login', [LoginController::class, 'logout'])->name('fromLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('register/send-otp/sent_OTP', [UserController::class, 'sent_OTP']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);

// Trang chủ
Route::get('/', [HomeController::class, 'index']);
// route phía người dùng
Route::prefix('/client')->group(function () {
    // Trang chủ client
    Route::prefix('home')->group(function(){
        Route::get('/index', [HomeController::class, 'index']);
        Route::get('/loadList',[HomeController::class,'loadList']);
        Route::post('/createForm', [HomeController::class,'createForm']);
        Route::post('/export', [HomeController::class,'export']);
    });
});

