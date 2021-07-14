<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SchoolController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin_', 'prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings/general-settings', [SettingsController::class, 'generalSettingsIndex'])->name('settings_general_settings');
    Route::post('/settings/general-settings', [SettingsController::class, 'generalSettingsIndexPost'])->name('settings_general_settings_post');
    Route::get('/settings/payment-settings', [SettingsController::class, 'paymentSettingsIndex'])->name('settings_payment_settings');
    Route::get('/settings/sms-settings', [SettingsController::class, 'smsSettingsIndex'])->name('settings_sms_settings');
    Route::get('/settings/email-settings', [SettingsController::class, 'emailSettingsIndex'])->name('settings_email_settings');
    Route::get('/settings/academic-year', [SettingsController::class, 'academicYearIndex'])->name('settings_academic_year');
    //School Management
    Route::get('/school-management/school/add', [SchoolController::class, 'addSchool'])->name('school_management_add_school');
    Route::get('/school-management/school/', [SchoolController::class, 'schoolView'])->name('school_management_school_view');
});
