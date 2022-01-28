<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplyformController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function()
{
    return view('users.user', ['name' => 'James']);
});

Route::get('/user/{id}', [TestController::class, 'showProfile']);

Route::get('/andreea', [TestController::class, 'testProfile']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route::get('/applyform', [ApplyFormController::class, 'applyform']);

Route::get('/signup', [SignupController::class, 'signup']);

Route::get('/login', [LoginController::class, 'login']);

