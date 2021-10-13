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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [App\Http\Controllers\LocalizationController::class,'index'])->middleware(['auth'])->name('/');
Route::get('change/lang', [App\Http\Controllers\LocalizationController::class, "lang_change"])->name('LangChange');

Route::get('employee/add', [App\Http\Controllers\AdminController::class,'addEmployee'])->middleware(['auth'])->name('employee/add');
Route::post('employee/add',[App\Http\Controllers\AdminController::class,'saveEmployee'])->middleware(['auth'])->name('employee/add');
Route::get('employee/edit/{id}', [App\Http\Controllers\AdminController::class,'editEmployee'])->middleware(['auth'])->name('employee/edit');
Route::get('employee/view', [App\Http\Controllers\AdminController::class,'employeeList'])->middleware(['auth'])->name('employee/view');

Route::get('delete/{id}',[App\Http\Controllers\AdminController::class,'deleteEmployee'])->middleware(['auth'])->name('employee/delete');



Route::get('company/add', [App\Http\Controllers\AdminController::class,'addcompany'])->middleware(['auth'])->name('company/add');
Route::post('company/add',[App\Http\Controllers\AdminController::class,'savecompany'])->middleware(['auth'])->name('company/save');
Route::get('company/edit/{id}', [App\Http\Controllers\AdminController::class,'editcompany'])->middleware(['auth'])->name('company/edit');
Route::get('company/view', [App\Http\Controllers\AdminController::class,'companyList'])->middleware(['auth'])->name('company/view');

Route::get('company/delete/{id}',[App\Http\Controllers\AdminController::class,'deletecompany'])->middleware(['auth'])->name('company/delete');


require __DIR__.'/auth.php';
