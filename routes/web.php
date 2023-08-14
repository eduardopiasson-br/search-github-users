<?php

use App\Http\Controllers\SearchUsers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Defalt view search JS
Route::get('/', function () {
    return view('js-index');
})->name('search.js');
// View search php
Route::get('/php', function () {
    return view('php-index');
})->name('search.php');

// Function search php
Route::post('php/search-users', [SearchUsers::class, 'searchPhp'])->name('search.users.php');
