<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    //Developer
    Route::group(['middleware' => 'auth'], function () {
    Route::get('/developers', [DeveloperController::class, 'index']);
    Route::get('developers/add', [DeveloperController::class, 'add']);
    Route::post('developers/add', [DeveloperController::class, 'add_post']);
    Route::get('developers/edit/{id}', [DeveloperController::class, 'edit']);
    Route::post('developers/edit/{id}', [DeveloperController::class, 'update']);
    Route::get('developers/delete/{id}', [DeveloperController::class, 'delete']);

    //Designations
    Route::get('designations', [DesignationController::class, 'index']);
    Route::get('designations/add', [DesignationController::class, 'add']);
    Route::post('designations/add', [DesignationController::class, 'add_post']);
    Route::get('designations/edit/{id}', [DesignationController::class, 'edit']);
    Route::post('designations/edit/{id}', [DesignationController::class, 'update']);
    Route::get('designations/delete/{id}', [DesignationController::class, 'delete']);
    });
