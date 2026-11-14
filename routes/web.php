<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/createemployee', function () {
        return view('Employees.create');
    });

    Route::post('addemployee', [EmployeeController::class, "create"]);

    Route::get('/employees', function () {
        return view('Employees.read');
    });


});

require __DIR__ . '/auth.php';
