<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\InternController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\JobController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ReportController;
use App\Http\Controllers\API\SkillController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');
Route::post('resetpasswordrequest', [AuthController::class, 'resetpasswordrequest']);
Route::post('resetpassword', [AuthController::class, 'resetpassword']);
// Route::get('reset-password/{token}', [AuthController::class, 'resetpasswordbytoken'])->name('reset.password.get');

//Authorization access
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('interns', InternController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('jobs', JobController::class);
    Route::resource('users', UserController::class);
    Route::resource('skills', SkillController::class);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::put('changepassword', [UserController::class, 'changePassword']);
    Route::put('updateuser', [UserController::class, 'updateUser']);
    Route::get('user', [UserController::class, 'fetchAuthUser']);
    Route::get('getrecruitercompany', [CompanyController::class, 'getRecruiterCompany']);
    Route::get('randfetchallcompanies', [CompanyController::class, 'fetchAllCompaniesRandomly']);
    Route::put('updatecompanyinfo', [CompanyController::class, 'updateCompanyInfo']);
    Route::get('fetchallinternsrandomly', [InternController::class, 'fetchAllInternsRandomly']);
    Route::get('fetchactiveinternsrandomly', [InternController::class, 'fetchActiveInternsRandomly']);
    Route::get('fetchrecruiterjobs', [JobController::class, 'fetchRecruiterJobs']);
    Route::get('fetchrecruiteralljobs', [JobController::class, 'fetchRecruiterAllJobs']);
    Route::get('fetchrecentjobs', [JobController::class, 'fetchRecentJobs']);
    Route::get('listjobapplicants/{id}', [JobController::class, 'listJobApplicants']);
    Route::get('fetchuserappliedjobs', [JobController::class, 'fetchUserAppliedJobs']);
    Route::get('fetchreport', [ReportController::class, 'fetchReport']);
    Route::get('jobreport/{id}', [ReportController::class, 'jobReport']);
    Route::get('fetchinternreport', [ReportController::class, 'fetchInternReport']);
    Route::get('userprofilelength', [UserController::class, 'getUserLength']);
    Route::get('fetchauthintern', [InternController::class, 'fetchAuthIntern']);
    Route::put('updateinterninfo', [InternController::class, 'updateInternInfo']);
    Route::get('fetchuserskills', [InternController::class, 'fetchUserSkills']);
    Route::post('populate-jobs', [JobController::class, 'PopulateJobs']);
});

