<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// READ
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// CREATE
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// UPDATE
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// DELETE
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');