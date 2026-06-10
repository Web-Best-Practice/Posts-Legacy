<?php

use Illuminate\Support\Facades\Route;
use WebBestPractice\Posts\Http\Controllers\IndexController;

Route::post('/', [IndexController::class, 'index'])->name('index');
