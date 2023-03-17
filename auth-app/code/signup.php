<?php

$usersFile = file_get_contents('users.json');
$users = json_decode($usersFile, true);

for($i = 0; $i < count($users); $i++) { 
    
    if($users[$i]['email']===$req->email) {
        return response()->json(['message' => 'Account already exists!', 'status' => 405], 405);
    }
}

    $newUser = ['name' => $req->name, 'email' => $req->email, 'password' =>
    $req->password];
    array_push($users, $newUser);

    file_put_contents('users.json', json_encode($users));

    return response()->json(['users' => $users, 'message' => 'Account created
    successfully!', 'status' => 200], 200);