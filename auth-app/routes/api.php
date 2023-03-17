<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


    
// file_put_contents('users2.json', json_encode($users));

// Handle Login

Route::post('/login', function (Request $request) {
    $email = $request->email;
    $password = $request->password;

    $json = file_get_contents('users.json');
    $users = json_decode($json, true);
    
    for ($i = 0; $i < count($users); $i++) {

        $getEmail = $users[$i]['email'];
        $getPassword = $users[$i]['password'];
        
        if($getEmail == $email && $getPassword == $password) {
            return response()->json(['message' => 'success', 'status' => 200], 200);
        }            
    }

    return response()->json(['message' => 'Incorrect Credentials!', 'status' => 403], 403);
});


// Handle Signup

Route::post('/signup', function()  {
        
});