<?php

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

Route::prefix('/employee')->group(function(){
    Route::get('/', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('list_employee');
    Route::get('/create_employee', [\App\Http\Controllers\EmployeeController::class, 'showCreateEmployeeForm'])->name('create');
    Route::post('/create_employee', [\App\Http\Controllers\EmployeeController::class, 'createEmployee']);
    Route::get('{id}/delete_employee', [\App\Http\Controllers\EmployeeController::class, 'deleteEmployee'])->name('delete_employee');
    Route::get('/update_employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'showFormUpdate'])->name('update');
    Route::post('/update_employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'update']);
    Route::get('find', [\App\Http\Controllers\EmployeeController::class, 'find'])->name('find');
});
