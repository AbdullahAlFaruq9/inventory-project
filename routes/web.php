<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::controller(EmployeeController::class)->group(function(){
    Route::get('/add-employee', 'index')->name('add.employee')->middleware(['auth']);
    Route::get('/all-employee', 'show_employee')->name('all.employee')->middleware(['auth']);
    Route::post('/insert-employee', 'store')->middleware(['auth']);
    Route::get('/delete-employee/{id}', 'delete_employee')->middleware(['auth']);
    Route::get('/view-employee/{id}', 'view_employee')->middleware(['auth']);
});

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/', function(){
    return view('backend.index');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
