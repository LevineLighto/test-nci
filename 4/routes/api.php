<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->as('users.')->group(function () {

    Route::get('/', [UserController::class, 'get'])->name('get');
    Route::get('{id}', [UserController::class, 'find'])->name('find');
    Route::post('/', [UserController::class, 'create'])->name('create');
    Route::put('{id}', [UserController::class, 'update'])->name('update');
    Route::delete('{id}', [UserController::class, 'delete'])->name('delete');

});
