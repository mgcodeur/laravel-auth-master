<?php

use Illuminate\Support\Facades\Route;
use Mgcodeur\AuthMaster\AuthMaster;

Route::get('totoss', function () {
    $user = AuthMaster::createUserAndGenerateAccessToken([
        'first_name' => 'Anais',
        'last_name' => 'Dubois',
        'email' => 'anaisdubois2@gmail.com',
        'password' => bcrypt('password'),
    ]);

    return response()->json($user);
});
