<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

$users = [
    [
        'name' => 'test test',
        'email' => 'test@gmail.com',
        'password' => '12341234'
    ],
    
    [
        'name' => 'john doe',
        'email' => 'johndoe@gmail.com',
        'password' => '12341234'
    ],
    
    [
        'name' => 'jane doe',
        'email' => 'janedoe@gmail.com',
        'password' => '12341234'
    ]
    
];
    
// file_put_contents('users2.json', json_encode($users));

// Handle Login

Route::post('/login', function (Request $request) {

    
});


// Handle Signup

Route::post('/signup', function()  {
        
});