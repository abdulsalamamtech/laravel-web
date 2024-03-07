<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Developer Information
Route::get('/dev', function () {
    return [
        'name' => 'Abdulsalam Abdulrahman',
        'username' => 'AbdulsalamAmtech',
        'email' => 'abdulsalamamtech@gmail.com',
        'github' => 'https://www.github.com/abdulsalamamtech',
        'facebook' => 'https://www.facebook.com/abdulsalamamtech',
        'linkedin' => 'https://www.linkedin.com/abdulsalamamtech',
        'twitter-X' => 'https://www.twitter.com/abdulsalamtech',
    ];
});
