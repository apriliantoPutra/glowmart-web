<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data= Product::all();
    return view('user/home', compact('data'));
});

// auth
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// admin
Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('admin');

Route::resource('admin/products', ProductController::class)->middleware('admin');
Route::patch('admin/products/{product}/update-status', [ProductController::class, 'updateStatus'])->name('products.updateStatus'); // cara 1 ubah status dgn resource


Route::get('admin/users',[AdminUserController::class, 'index'])->middleware('admin');
Route::get('admin/users/{id}/approve',[AdminUserController::class, 'updateApprove'])->middleware('admin')->name('users.approve'); // cara 2 ubah status biasa

// user
Route::get('/user/dashboard', function () {
    $data= Product::all();
    return view('user/home', compact('data'));
})->middleware('auth');



