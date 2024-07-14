<?php

use App\Http\Controllers\ActualsController;
use App\Http\Controllers\AdditionalMOPController;
use App\Http\Controllers\DetailPlanningController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\MopController;

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

Route::get('/', [ProjectsController::class, 'index']);
Route::get('/data', [PlanningController::class, 'get']);
Route::get('/data', [PlanningController::class, 'getActual']);
Route::get('/actual', [ActualsController::class, 'getActual']);
Route::get('/detailplanning', [DetailPlanningController::class, 'index'])->name('detailplanning.index');
Route::post('/add_mop', [AdditionalMOPController::class, 'store'])->name('add_mops.store');
Route::get('/export/man-power-planning/{slug}', [ExportController::class, 'exportManPowerPlanning'])->name('export.man-power-planning');
Route::resource('projects', ProjectsController::class);
Route::resource('/planning', PlanningController::class);
Route::resource('/actuals', ActualsController::class);
Route::resource('/mop', MopController::class);
Route::post('/projects/delete', [ProjectsController::class, 'deleteMultiple'])->name('projects.deleteMultiple');
Route::get('/getEmployeeDetails/{empid}', [MopController::class, 'getEmployeeDetails'])->name('getEmployeeDetails');
Route::post('api/fetch-data', [MopController::class, 'fetchPlanningTask']);
Route::post('api/fetch-data', [ActualsController::class, 'fetchPlanningTask']);
Route::post('api/fetch-data', [MopController::class, 'fetchPlanningDate']);
Route::post('api/fetch-data', [ActualsController::class, 'fetchPlanningDate']);
