<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Models\Device;

Route::get('/', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "dashboard"
    ]);
});

//devices
Route::get('/devices', [DeviceController::class, 'web_index']);

Route::get('/devices/{id}', [DataController::class, 'web_show']);

//data
Route::get('/data', function () {
    return view('data', [
        "title" => "data"
    ]);
});

//users
Route::get('/users', function () {
    return view('users', [
        "title" => "users"
    ]);
});
