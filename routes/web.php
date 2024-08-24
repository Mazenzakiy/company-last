<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Department\DepartmentController;
use App\Http\Controllers\Admin\Employee\EmployeeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Project\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/admins')->name('admins.')->group(function () {

    // Direct route using an invokable controller
    Route::get('home', HomeController::class)->name('home');

    // Group routes that use the same controller
    Route::controller(AdminController::class)->group(function () {
        Route::get('index' , 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('create', 'store')->name('store');
        Route::get('edit', 'editForm')->name('editForm');
        Route::post('edit', 'edit')->name('edit');
        Route::get('profile', 'profile')->name('profile');
    });

    Route::prefix('/employee')->name('employee.')->group(function(){

        Route::controller(EmployeeController::class)->group(function(){
        Route::get('index','index')->name('index');
        Route::get('create', 'create')->name('createForm');
        Route::post('create', 'store')->name('store');
        Route::get('edit', 'editForm')->name('editForm');
        Route::post('edit', 'edit')->name('edit');
        Route::get('profile', 'profile')->name('profile');

        });

    });

    Route::prefix('/department')->name('department.')->group(function(){

        Route::controller(DepartmentController::class)->group(function(){
        Route::get('index','index')->name('index');
        Route::get('create', 'create')->name('createForm');
        Route::post('create', 'store')->name('store');
        Route::get('edit', 'editForm')->name('editForm');
        Route::post('edit', 'edit')->name('edit');
        Route::get('profile', 'profile')->name('profile');

        });

    });

    Route::prefix('/project')->name('project.')->group(function(){

        Route::controller(ProjectController::class)->group(function(){
        Route::get('index','index')->name('index');
        Route::get('create', 'create')->name('createForm');
        Route::post('create', 'store')->name('store');
        Route::get('edit', 'editForm')->name('editForm');
        Route::post('edit', 'edit')->name('edit');
        Route::get('profile', 'profile')->name('profile');

        });

    });
});













