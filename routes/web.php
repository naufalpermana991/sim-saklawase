<?php

use App\Http\Controllers\DetailPlanningController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\NavTabsProjectsController;
use App\Http\Controllers\NavTabsPlanningController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\PlanningDetailsController;
use App\Http\Controllers\MapController;
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
Route::get('/detailplanning', [DetailPlanningController::class, 'index'])->name('detailplanning.index');
Route::get('/export/man-power-planning/{slug}', [ExportController::class, 'exportManPowerPlanning'])->name('export.man-power-planning');
Route::resource('/projects', ProjectsController::class);
Route::resource('/planning', PlanningController::class);
Route::resource('/mop', MopController::class);
