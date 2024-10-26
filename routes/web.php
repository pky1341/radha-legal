<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;


Route::get('/', [LeadController::class, 'index']);
Route::get('/user-form', [LeadController::class, 'userForm'])->name('user-form');
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
Route::get('/admin/dashboard', [LeadController::class, 'adminDashboard'])
    ->name('admin.dashboard');
