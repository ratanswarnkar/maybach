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
Route::get('/founder',[LovinoCOntroller::class, 'founder']);
Route::get('/p1details',[LovinoController::class, 'p1details']);
Route::get('/p2details',[LovinoController::class, 'p2details']);
Route::get('/p3details',[LovinoController::class, 'p3details']);
Route::get('/p4details',[LovinoController::class, 'p4details']);
Route::get('/p5details',[LovinoController::class, 'p5details']);
Route::get('/p6details',[LovinoController::class, 'p6details']);
Route::get('/p7details',[LovinoController::class, 'p7details']);
Route::get('/p8details',[LovinoController::class, 'p8details']);
Route::get('/p9details',[LovinoController::class, 'p9details']);
Route::get('/p10details',[LovinoController::class, 'p10details']);









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

