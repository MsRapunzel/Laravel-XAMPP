<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\RedirectController;

Route::get("/", [RoutesController::class, 'welcome']);
Route::get('/home', [RoutesController::class, 'home']);
Route::get('/about', [RoutesController::class, 'about']);
Route::get('/contact', [RoutesController::class, 'contact']);
Route::get('/signin', [RoutesController::class, 'signIn']);
Route::get('/login', [RoutesController::class, 'logIn']);
Route::get('/user/{id}', [RoutesController::class, 'user']);
Route::get('/redirect', RedirectController::class);
