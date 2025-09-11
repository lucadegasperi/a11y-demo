<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use App\Http\Requests\LoginRequest;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login8');
});

Route::post('/login', function(LoginRequest $request) {
    return redirect()->to('/orders')->with('success', 'Benvenuto ' . $request->string('username'));
})->middleware([HandlePrecognitiveRequests::class]);

Route::get('/orders', function () {
    return view('orders');
});

