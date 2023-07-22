<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\InternController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;

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

// HomePages
Route::get('/', [InternController::class, 'homepage'])->name('home.index');
Route::get('/employers', [InternController::class, 'FetchInterns'])->name('home.employers');
Route::get('/certification-courses', function () {
    return view('home.certification_courses');
})->name('home.certification_courses');
Route::get('/privacy-policy', function () {
    return view('home.privacy_policy');
})->name('home.privacy_policy');
Route::get('/terms-and-conditions', function () {
    return view('home.terms_conditions');
})->name('home.terms_conditions');
Route::get('/about-us', function () {
    return view('home.about_us');
})->name('home.about_us');



//Jobs 
Route::get('internship-jobs', [JobController::class, 'index'])->name('home.jobs_list');
Route::get('internship-job/{id}/{company}/{jobtitle}', [JobController::class, 'FetchJobDetails'])->name('home.job_details');
Route::post('intern-apply', [JobController::class, 'ApplyForJob'])->name('intern.apply');

//reset password
Route::get('reset-password/{token}', [AuthController::class, 'resetpasswordbytoken'])->name('reset.password.get');
Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Company company
Route::get('company/{id}/{companyname}', [CompanyController::class, 'FetchCompanyDetails'])->name('home.company_detail');

//Intern
Route::get('find-interns', [InternController::class, 'index'])->name('home.find_interns');
Route::get('@{username}', [InternController::class, 'fetchUserProfile'])->name('home.user_profile');

//Home
Route::get('/ui-ux-design-training-internsifyme', function () {
    return view('home.ui_ux_design');
})->name('home.ui_ux_design');

Route::get('/email-preview', function () {
    return view('home.default');
})->name('mail.default');

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');


