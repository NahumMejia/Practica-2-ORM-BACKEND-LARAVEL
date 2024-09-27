<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    $users = User::get();

    return view('welcome', ['users' => $users]);
});

Route::get('/profile/{id}', function($id) {
    $user = User::find($id);

    return view('profile',[
        'user'=> $user
    ]);

})->name('profile');
