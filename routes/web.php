<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [UserController::class, 'index']);

Route::post('/register', [UserController::class, 'store'])->name('store.user');



Route::controller(TransactionController::class)->group(function() {
    Route::get('/transaction-list', 'index')->name('transaction.index');

    Route::get('/transaction-create', 'create');

    Route::post('/transaction-create', 'store')->name('store.transaction');

    Route::get('/transaction/{obr_no}/edit', 'edit')->name('edit.transaction');

    Route::put('/transaction/{obr_no}/update', 'update')->name('update.transaction');

    Route::delete('/transaction/{id}/delete', 'destroy')->name('delete.transaction');
});


Route::get('/test', function() {
    return view('test');
});
