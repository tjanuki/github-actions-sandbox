<?php

use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = User::all();

    $results = $users->groupByRelativeDate();

    dd($results);
});

Route::get('/setup', function () {
    $user = User::factory()->create();

    Auth::login($user);

    return redirect('/test');
});

Route::get('/test', function (#[\Illuminate\Container\Attributes\Authenticated] User $user) {
    dd($user);
})->middleware('auth');

Route::get('/avatar', function (\App\Avatar $avatar) {
    $avatar->save();

    return 'Avatar saved!';
});

Route::get('/app-name', function (#[\App\Attribute\CustomConfig('app.name')] $appName) {
    dd($appName);
});