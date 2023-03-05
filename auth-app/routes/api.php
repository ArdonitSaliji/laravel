<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Handle Login

Route::post('/login', function (Request $request) {
    
});


// Handle Signup


// $users = array(
//     array(
//         'name' => 'test test',
//         'email' => 'test@gmail.com',
//         'password' => '12341234'
//     ),

//     array(
//         'name' => 'john doe',
//         'email' => 'johndoe@gmail.com',
//         'password' => '12341234'
//     ),

//     array(
//         'name' => 'jane doe',
//         'email' => 'janedoe@gmail.com',
//         'password' => '12341234'
//     )
// );

Route::post('/signup', function(Request $req) {
    

});