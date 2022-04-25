<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\DashboradController;
use App\Http\Controllers\Frontend\FrontendController;


/***
 * frontend Controler
 */
Route::get('/',[FrontendController::class, 'ShowHomePage']) ->name('home.page');
Route::get('/menu',[FrontendController::class, 'ShowMenuPage']) ->name('menu.page');
Route::get('/blog',[FrontendController::class, 'ShowBlogPage']) ->name('blog.page');
Route::get('/staff',[FrontendController::class, 'ShowStaffPage']) ->name('staff.page');


/***
 * backend Controler

 */
Route::get('dashborad', [DashboradController::class,'ShowDashborad']) ->name('dashborad.index');

Route::resource('/staff', StaffController::class);



