<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HistoricController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\JustificationController;
use App\Http\Controllers\OccurrenceController;
use App\Http\Controllers\PersonalbackController;
use App\Http\Controllers\PhysicalController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SchedulesController;
use App\Http\Controllers\RequisitionController;
use App\Models\Occurrence;
use App\Models\Schedules;

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

// Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/occurrencescount', [OccurrenceController::class, 'count']);

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    // User
    Route::get('/user', [AuthController::class, 'user']);
    Route::get('/users', [AuthController::class, 'users']);
    Route::put('/user', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/registeradm', [AuthController::class, 'registeradm']);

    // Occurrences
    Route::get('/occurrences', [OccurrenceController::class, 'index']);
    // Route::get('/occurrencescount', [OccurrenceController::class, 'count']);
    Route::post('/occurrences', [OccurrenceController::class, 'store']);
    Route::get('/occurrences/{id}', [OccurrenceController::class, 'show']);
    Route::put('/occurrences/{id}', [OccurrenceController::class, 'update']);
    Route::delete('/occurrences/{id}', [OccurrenceController::class, 'destroy']);

    // Schedules
    Route::get('/schedules', [SchedulesController::class, 'index']);
    Route::post('/schedules', [SchedulesController::class, 'store']);
    Route::get('/schedules/{id}', [SchedulesController::class, 'show']);
    Route::put('/schedules/{id}', [SchedulesController::class, 'update']);
    Route::delete('/schedules/{id}', [SchedulesController::class, 'destroy']);

    // Reports
    Route::get('/reports', [ReportController::class, 'index']);
    Route::post('/reports', [ReportController::class, 'store']);
    Route::get('/reports/{id}', [ReportController::class, 'show']);
    Route::put('/reports/{id}', [ReportController::class, 'update']);
    Route::delete('/reports/{id}', [ReportController::class, 'destroy']);

    // Justifications
    Route::get('/justifications', [JustificationController::class, 'index']);
    Route::post('/justifications', [JustificationController::class, 'store']);
    Route::get('/justifications/{id}', [JustificationController::class, 'show']);
    Route::put('/justifications/{id}', [JustificationController::class, 'update']);
    Route::delete('/justifications/{id}', [JustificationController::class, 'destroy']);

    // Requisitions
    Route::get('/requisitions', [RequisitionController::class, 'index']);
    Route::post('/requisitions', [RequisitionController::class, 'store']);
    Route::get('/requisitions/{id}', [RequisitionController::class, 'show']);
    Route::put('/requisitions/{id}', [RequisitionController::class, 'update']);
    Route::delete('/requisitions/{id}', [RequisitionController::class, 'destroy']);

    // Requisitions
    Route::get('/historics', [HistoricController::class, 'index']);
    Route::post('/historics', [HistoricController::class, 'store']);
    Route::get('/historics/{id}', [HistoricController::class, 'show']);
    Route::put('/historics/{id}', [HistoricController::class, 'update']);
    Route::delete('/historics/{id}', [HistoricController::class, 'destroy']);

    // Insurence
    Route::post('/insurance', [InsuranceController::class, 'store']);
    Route::get('/insurance/{id}', [InsuranceController::class, 'show']);
    Route::put('/insurance/{id}', [InsuranceController::class, 'update']);

    // Physical
    Route::post('/physical', [PhysicalController::class, 'store']);
    Route::get('/physical/{id}', [PhysicalController::class, 'show']);
    Route::put('/physical/{id}', [PhysicalController::class, 'update']);

    // Personalback
    Route::post('/personalback', [PersonalbackController::class, 'store']);
    Route::get('/personalback/{id}', [PersonalbackController::class, 'show']);
    Route::put('/personalback/{id}', [PersonalbackController::class, 'update']);

    // Physical Exam
    Route::post('/physicalexam', [PhysicalController::class, 'store']);
    Route::get('/physicalexam/{id}', [PhysicalController::class, 'show']);
    Route::put('/physicalexam/{id}', [PhysicalController::class, 'update']);

});
