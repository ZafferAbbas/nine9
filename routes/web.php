<?php

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
        return view('index');
    })->name('dashboard');    

Route::middleware('guest')->group(function () {
});
Route::middleware('auth')->group(function () {
});
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('roleUsers', App\Http\Controllers\RoleUserController::class);
Route::resource('franchisees', App\Http\Controllers\FranchiseeController::class);
Route::resource('shops', App\Http\Controllers\ShopController::class);
Route::resource('sales', App\Http\Controllers\SaleController::class);
Route::resource('expenses', App\Http\Controllers\ExpenseController::class);