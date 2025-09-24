<?php

use App\Http\Controllers\Backoffice\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
});

Route::controller(BookController::class)->group(function () {
    Route::get('/books', 'index')->name('books.index');
    Route::get('/books/create', 'create')->name('books.create');
    Route::post('/books', 'store')->name('books.store');
    Route::get('/books/{book}', 'show')->name('books.show');
    Route::get('/books/{book}/edit', 'edit')->name('books.edit');
    Route::put('/books/{book}', 'update')->name('books.update');
    Route::delete('/books/{book}', 'destroy')->name('books.destroy');
});

Route::controller(LoanController::class)->group(function () {
    Route::get('/loans', 'index')->name('loans.index');
    Route::get('/loans/create', 'create')->name('loans.create');
    Route::post('/loans', 'store')->name('loans.store');
    Route::get('/loans/{loan}', 'show')->name('loans.show');
    Route::get('/loans/{loan}/edit', 'edit')->name('loans.edit');
    Route::put('/loans/{loan}', 'update')->name('loans.update');
    Route::delete('/loans/{loan}', 'destroy')->name('loans.destroy');
});

Route::controller(ReservationController::class)->group(function () {
    Route::get('/reservations', 'index')->name('reservations.index');
    Route::get('/reservations/create', 'create')->name('reservations.create');
    Route::post('/reservations', 'store')->name('reservations.store');
    Route::get('/reservations/{reservation}', 'show')->name('reservations.show');
    Route::get('/reservations/{reservation}/edit', 'edit')->name('reservations.edit');
    Route::put('/reservations/{reservation}', 'update')->name('reservations.update');
    Route::delete('/reservations/{reservation}', 'destroy')->name('reservations.destroy');
});

Route::controller(ReportController::class)->group(function () {
    Route::get('/reports', 'index')->name('reports.index');
    Route::get('/reports/create', 'create')->name('reports.create');
    Route::post('/reports', 'store')->name('reports.store');
    Route::get('/reports/{report}', 'show')->name('reports.show');
    Route::get('/reports/{report}/edit', 'edit')->name('reports.edit');
    Route::put('/reports/{report}', 'update')->name('reports.update');
    Route::delete('/reports/{report}', 'destroy')->name('reports.destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/create', 'create')->name('users.create');
    Route::post('/users', 'store')->name('users.store');
    Route::get('/users/{user}', 'show')->name('users.show');
    Route::get('/users/{user}/edit', 'edit')->name('users.edit');
    Route::put('/users/{user}', 'update')->name('users.update');
    Route::delete('/users/{user}', 'destroy')->name('users.destroy');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
require __DIR__.'/testing.php';
