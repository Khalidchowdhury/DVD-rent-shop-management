<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rentController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Backend\dashController;
use App\Http\Controllers\transactionsrController;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






// Application all route 

Route::get('/', [dashController::class, 'login'])->name('login.page');
Route::get('/logout', [dashController::class, 'logout'])->name('logout.page');
Route::get('/dashboard', [dashController::class, 'showDashboard'])->middleware(['auth', 'verified'])->name('dashboard.page');


// movie section route 
Route::resource('movies', MovieController::class);
Route::get('/movie', [MovieController::class, 'index'])->middleware(['auth', 'verified'])->name('movie.page');
Route::get('/add-movie', [MovieController::class, 'create'])->name('addMovie.page');
Route::post('/add-movie', [MovieController::class, 'store'])->name('addMovie.page');
Route::get('/movie-delete/{id}', [MovieController::class, 'destroy'])->name('movie.destroy');
Route::get('/movie-view/{id}', [MovieController::class, 'view'])->name('movie.view');
// working
Route::get('movie/{id}/edit', [MovieController::class, 'edit'])->name('posts.edit');
Route::put('movie/{id}', [MovieController::class, 'update'])->name('posts.update');
// Movie search 
Route::get('/search-dvd', [MovieController::class, 'searchProduct'])->middleware(['auth', 'verified'])->name('search.page');
Route::get('/movie_by_cetagory/{id}', [MovieController::class, 'movie_by_cetagory'])->name('movie_by_cetagory');




// Employee Controller Route 
Route::get('/employee', [EmployeeController::class, 'index'])->middleware(['auth', 'verified'])->name('employee.page');
Route::get('/add-employee', [EmployeeController::class, 'create'])->middleware(['auth', 'verified'])->name('addEmployee.page');
Route::post('/add-employee', [EmployeeController::class, 'store'])->middleware(['auth', 'verified'])->name('addEmployee.page');
Route::get('/view-employee/{id}', [EmployeeController::class, 'view'])->middleware(['auth', 'verified'])->name('viewEmployee.page');
Route::get('/employee-delete/{id}', [EmployeeController::class, 'destroy'])->middleware('auth', 'verified')->name('employee.delete');



// Customer Controller Route 
Route::get('/customer', [CustomerController::class, 'index'])->middleware(['auth', 'verified'])->name('customer.page');
Route::get('/add-customer', [CustomerController::class, 'create'])->middleware(['auth', 'verified'])->name('addCustomer.page');
Route::post('/add-customer', [CustomerController::class, 'store'])->middleware(['auth', 'verified'])->name('addCustomer.page');
Route::get('/delete-custommer/{id}', [CustomerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('custommer-destroy');
Route::get('/view-custommer/{id}', [CustomerController::class, 'view'])->middleware(['auth', 'verified'])->name('viewCustomer.page');
Route::get('/search-customer', [CustomerController::class, 'searchCustomer'])->middleware(['auth', 'verified'])->name('CustomerSearch.page');



// Rent a DVD all route 
Route::get('/rent', [rentController::class, 'index'])->middleware(['auth', 'verified'])->name('rent.page');
Route::get('/rent-create', [rentController::class, 'create'])->middleware(['auth', 'verified'])->name('addRent.page');
Route::post('/rent-create', [rentController::class, 'store'])->middleware(['auth', 'verified'])->name('addRent.page');
Route::get('/rent-delete/{id}', [rentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteRent.page');
Route::get('/rent-view/{id}', [rentController::class, 'view'])->middleware(['auth', 'verified'])->name('rentView.page');
Route::get('/search', [rentController::class, 'searchRent'])->middleware(['auth', 'verified'])->name('searchRent.page');


// trnatransactions all route 
Route::get('/transactions', [transactionsrController::class, 'transactions'])->middleware(['auth', 'verified'])->name('transactions.page');
Route::get('/add-transactions', [transactionsrController::class, 'index'])->middleware(['auth', 'verified'])->name('addTransactions.page');



// Category all route 
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');





