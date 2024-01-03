<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MissionPerPeriodController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\MissionPerPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Route::get('password', function() {
//     return Hash::make('123');
// });

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('auth', function (Request $request) {
        return $request->user();
    });

    Route::resource('user', UserController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('project.step', StepController::class);
    Route::resource('project.step.task', TaskController::class);

    Route::get('company/{company}/mission_per_period/in_period', [MissionPerPeriodController::class, 'inPeriod'])->name('company.mission_per_period.in_period');
    Route::resource('company.mission_per_period', MissionPerPeriodController::class);
});

