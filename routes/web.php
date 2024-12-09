<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PolicyTypesController;
use App\Http\Controllers\PoliciesController;
use App\Http\Controllers\CompaniesController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/policy-types', [PolicyTypesController::class, 'index']);
Route::get('/policy-types/{type}', [PolicyTypesController::class, 'show']);
Route::get('/policies', [PoliciesController::class, 'index']);
Route::get('/policies/{id}', [PoliciesController::class, 'show']);
Route::get('/companies', [CompaniesController::class, 'index']);
Route::get('/companies/{company}', [CompaniesController::class, 'show']);
