<?php
use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add_doctor', [Controller\Site::class, 'add_doctor'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_patient', [Controller\Site::class, 'add_patient'])
    ->middleware('auth');
Route::add('GET', '/doctors', [Controller\Site::class, 'doctor'])
    ->middleware('auth');
Route::add('GET', '/patients', [Controller\Site::class, 'patient'])
    ->middleware('auth');