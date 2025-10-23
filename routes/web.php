<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LovinoController;
use App\Http\Controllers\AdminController;


Route::get('/', [LovinoController::class, 'index']);
Route::get('/about-us',[LovinoController::class, 'aboutUs']);
Route::get('/projects',[LovinoController::class, 'projects']);
Route::get('/sale',[LovinoController::class, 'sale']);
Route::get('/rent',[LovinoController::class, 'rent']);
Route::get('/team',[LovinoController::class, 'team']);
Route::get('/career',[LovinoController::class, 'career']);
Route::get('/contact', [LovinoController::class, 'contact']);




//Admin Routes

Route::middleware('admin')->prefix('admin')->group(function(){
  Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});


Route::prefix('admin')->group(function(){
  Route::get('/login', [AdminController::class, 'login'])->name('admin_login');
  Route::post('/login', [AdminController::class, 'login_submit'])->name('admin_login_submit');
  Route::get('/forget-password', [AdminController::class, 'forget_password'])->name('admin_forget_password');
  Route::post('/forget-password', [AdminController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
  Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');
});

