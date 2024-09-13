<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController as ClientHomeController;

use App\Http\Controllers\Auth\LoginController;
use Modules\Client\Auth\Controllers\RegisterController;
use Modules\Client\Page\Chat\Controllers\ChatClientController;
use Modules\Client\Page\Facilities\Controllers\FacilitiesController;
use Modules\Client\Page\Contact\Controllers\ContactController;
use Modules\Client\Page\Specialty\Controllers\SpecialtyController;
use Modules\Client\Page\Package\Controllers\PackageController;
use Modules\Client\Page\SearchSchedule\Controllers\SearchScheduleController;
use Modules\Client\Page\AppointmentAtHome\Controllers\AppointmentAtHomeController;
use Modules\Client\Page\Infor\Controllers\InforController;
use Modules\Client\Page\Patient\Controllers\PatientController;
use Modules\Client\Page\Role\Controllers\RoleController;
use Modules\Client\Page\Faq\Controllers\FAQController;
use Modules\Client\Page\About\Controllers\AboutController;

//Dashboard
use Modules\System\Dashboard\Users\Controllers\UserController;
use Modules\Client\Page\MapController;

// use Modules\Client\Page\Home\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'index']);


Route::get('mapReport',  [MapController::class,'mapReport']);

Route::get('/system/home', [LoginController::class, 'checkLogin'])->name('checkLogin');
Route::post('/login/checkLogin_client', [LoginController::class, 'checkLogin_client']);
Route::get('/system/login', [LoginController::class, 'logout'])->name('fromLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('register/send-otp/sent_OTP', [UserController::class, 'sent_OTP']);
Route::get('/home', [App\Http\Controllers\ClientHomeController::class, 'index'])->name('home');
Route::get('/', [ClientHomeController::class, 'index']);




// Trang chủ
Route::get('/', [ClientHomeController::class, 'index']);
// Route::get('/', [AppointmentAtHomeController::class,'indexApointment']);
// Trang chủ cơ sở bệnh viện
Route::get('/facilities', [FacilitiesController::class, 'index']);
Route::get('/facilities/{code}', [FacilitiesController::class, 'detailIndex']);
Route::get('/schedule/{code}', [FacilitiesController::class, 'schedule']);
Route::get('/schedule/{code}/{idstaff}', [FacilitiesController::class, 'schedule']);
// lịch khám có bác sĩ theo chuyên khoa
Route::get('/scheduleStage/{code}/{physician}', [FacilitiesController::class, 'scheduleStage']);

// dịch vụ tại nhà
Route::get('/appointmentathome/{code}', [AppointmentAtHomeController::class, 'index']);

// Trang chủ cơ sở bệnh viện
Route::get('/package', [PackageController::class, 'index']);

// chuyên khoa
Route::get('/specialty', [SpecialtyController::class, 'index']);
Route::get('/specialty/{code}', [SpecialtyController::class, 'specialty']);

// Trang chủ contact
Route::get('/contact', [ContactController::class, 'index']);
// trang chủ tra cứu
Route::get('/searchschedule',[SearchScheduleController::class,'index']);
Route::get('/patients',[PatientController::class,'index']);
Route::get('/vai-tro',[RoleController::class,'index']);
Route::get('/lien-he',[ContactController::class,'lien_he']);
Route::get('/faq',[FAQController::class,'index']);

// route phía người dùng
Route::prefix('/client')->group(function () {
    // Trang chủ client
    Route::prefix('home')->group(function(){
        Route::get('/index', [ClientHomeController::class, 'index']);
        Route::get('/loadList',[ClientHomeController::class,'loadList']);
        Route::post('/createForm', [ClientHomeController::class,'createForm']);
    });
});
// Route::get('/index', [UserController::class, 'index']);
// Route::get('/loadList',[UserController::class,'loadList']);
// Route::post('/edit', [UserController::class,'edit']);
// Route::post('/createForm', [UserController::class,'createForm']);
// Route::post('/create', [UserController::class,'create']);
// Route::post('/delete', [UserController::class,'delete']);

