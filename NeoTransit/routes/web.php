<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addUserView', [App\Http\Controllers\UserController::class, 'addUserView'])->name('addUser');
Route::get('/updateUser', [App\Http\Controllers\UserController::class, 'updateUserView'])->name('updateUserView');
Route::get('/addAdmin', [App\Http\Controllers\AdminController::class, 'addAdminView'])->name('addAdminView');
Route::get('/updateAdminView', [App\Http\Controllers\AdminController::class, 'updateAdminView'])->name('updateAdminView');
//
Route::put('/updateUser', [App\Http\Controllers\UserController::class, 'updateUser'])->name('updateUser');
Route::POST('/addUser', [App\Http\Controllers\UserController::class, 'addUser'])->name('addUser');

Route::get('/map', [App\Http\Controllers\MapsController::class, 'mapView'])->name('map');

Route::get('/dashboard', [App\Http\Controllers\DashboradController::class, 'dashboardView'])->name('dashboardView');
