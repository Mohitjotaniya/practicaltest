<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyviewController;
use App\Http\Controllers\Employeviewontroller;
use App\Http\Controllers\CountController;
use GuzzleHttp\Middleware;

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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/', [FrontendController::class, 'index']);
    Route::get('/employee', [EmployeeController::class, 'index']);
    Route::post('/register', [EmployeeController::class, 'store']);

    
    Route::get('/login', [AdminController::class, 'index'])->name('login');
    Route::post('/adminlogin', [AdminController::class, 'adminlogin']);

    Route::get('/adm', [AdminController::class, 'view'])->middleware('auth');
     Route::resource('company', CompanyController::class);


     Route::get('/conamyview', [CompanyviewController::class, 'index']);
     Route::get('/view_company', [CompanyviewController::class, 'show']);

     Route::get('/view_employee', [Employeviewontroller::class, 'index']);
     Route::get('/sarch_employee', [Employeviewontroller::class, 'show']);

     Route::get('/com_employee', [CountController::class, 'show']);

     Route::get('/count', [CountController::class, 'index']);

     Route::get('/logout', [AdminController::class, 'logout']);






    
