<?php

use App\Http\Controllers\NavTabsProjectsController;
use App\Http\Controllers\NavTabsPlanningController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\PlanningDetailsController;
use App\Http\Controllers\MapController;

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


Route::resource('/projects', ProjectsController::class);
Route::resource('/planning', PlanningController::class);
Route::resource('/planning-details', PlanningDetailsController::class);
