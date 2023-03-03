<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

$users = (object) [
    'email' => 'test@gmail.com',
    'password' => '12341234'
];

$users2 = [
    'email' => 'test@gmail.com',
    'password' => '12341234'
];

// Handle Login


Route::post('/login', function (Request $request) use($users, $users2) {
    
    $email = $request->email;
    $password = $request->password;

    if($email === $users->email) {
        return response()->json(['redirect' => '/success', 'status' => 200], 200);
    } else {
        return response()->json(['message' => 'Authentication failed'], 403);
    }
});