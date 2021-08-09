<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\SchoolController;
use App\Http\Controllers\admin\BranchController;
use App\Http\Controllers\admin\TeacherController;
use App\Http\Controllers\admin\StudentTypeController;
use App\Http\Controllers\admin\StudentController;

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
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'Cleared!';
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

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
    Route::get('/school-management/school/', [SchoolController::class, 'index'])->name('school_management_add_school');
    Route::post('/school-management/school/', [SchoolController::class, 'store'])->name('school_management_add_school_post');
    Route::get('/school-management/branch/', [BranchController::class, 'index'])->name('school_management_add_branch');
    Route::post('/school-management/branch/', [BranchController::class, 'store'])->name('school_management_add_branch_post');
    //Teacher Management
    Route::get('/teacher-management/teacher/', [TeacherController::class, 'index'])->name('teacher_management_add_teacher');
    Route::post('/teacher-management/teacher/', [TeacherController::class, 'store'])->name('teacher_management_add_teacher_post');
    //Student Management
    Route::get('/student-management/type/', [StudentTypeController::class, 'index'])->name('student_management_add_student_type');
    Route::post('/student-management/type/', [StudentTypeController::class, 'store'])->name('student_management_add_student_type_post');
    Route::get('/student-management/student/', [StudentController::class, 'index'])->name('student_management_add_student');
});
