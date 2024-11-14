<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
})->middleware('guest');


Route::middleware(['auth','verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');

    Route::get('/suppliers', function () {
        return view('suppliers/index');
    })->name('suppliers');

    Route::get('/categories', function () {
        return view('inventory/categories');
    })->name('categories');

    Route::get('/incoming-goods', function () {
        return view('inventory/incoming-goods');
    })->name('incoming-goods');

    Route::get('/list-product', function () {
        return view('inventory/list-product');
    })->name('list-product');

    Route::get('/low-stock', function () {
        return view('inventory/low-stock');
    })->name('low-stock');

    Route::get('/outgoing-goods', function () {
        return view('inventory/outgoing-goods');
    })->name('outgoing-goods');

    Route::get('/users', function () {
        return view('access-permissions/index');
    })->name('users');

    Route::get('/logs', function () {
        return view('logs/index');
    })->name('logs');

    Route::get('/reports', function () {
        return view('reports/index');
    })->name('reports');
    



});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
