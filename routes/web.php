<?php

use App\Http\Controllers\Cadastro\StatusController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome');});

Route::get('/', [HomeController::class, "index"] )->name("home");
Route::resource("/status", StatusController::class);
