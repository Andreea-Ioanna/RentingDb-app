<?php

use App\Http\Controllers\PropertiesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/add-property', function () {
    return view('landlord.add-property');
})->middleware(['auth'])->name('landlord.add-property');

Route::get('/edit-property', function () {
    return view('landlord.edit-property');
})->middleware(['auth'])->name('landlord.edit-property');

Route::get('/my-properties', function () {
    return view('landlord.my-properties');
})->middleware(['auth'])->name('landlord.my-properties');

require __DIR__ . '/auth.php';
