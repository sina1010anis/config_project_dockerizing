<?php

use App\Http\Controllers\LaravelVersion_11_23;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/concurrency', [LaravelVersion_11_23::class, 'Concurrency']);
