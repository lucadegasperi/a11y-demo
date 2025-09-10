<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login8');
});

Route::post('/login', function(Request $request){
    $validator = Validator::make($request->all(), [
        'username' => 'required',
        'password' => 'required',
    ]);
    $validator->validate();

    return redirect()->to('/orders')->with('success', 'Benvenuto ' . $request->string('username'));
});

Route::get('/orders', function () {
    return view('orders');
});

