<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

// ! ------- Website Home Work ------- !
Route::get('/',[HomeController::class,'index']);
Route::get('/enrollment',[HomeController::class,'formpage']);
Route::post('/store',[HomeController::class,'enroll']);

// ! ------- Website Dashboard Work ------- !
Route::get('/dashboard',[DashboardController::class,'Index']);
// ! ------- Category Routes Work ------- !
Route::get('/dashboard/category-insert',[DashboardController::class,'categoryinsert']);
Route::get('/dashboard/category-list',[DashboardController::class,'categorylist']);

// ! ------- Student Routes Insert List Work ------- !
Route::get('/dashboard/students-list',[StudentController::class,'index']);
Route::get('/dashboard/student-insert',[StudentController::class,'insert']);
Route::post('/student/store',[StudentController::class,'store']);

// ! ------- Student Edit Work ------- !
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::post('/student/update/{id}',[StudentController::class,'update']);
Route::get('/student/delete/{id}',[StudentController::class,'delete']);
