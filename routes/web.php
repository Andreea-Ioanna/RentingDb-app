<?php

use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\TenantController;
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

Route::get('/', [PropertiesController::class, 'allProperties']);

Route::get('/dashboard', [PropertiesController::class, 'allPropertiesDashboard'])
    ->middleware(['auth'])->name('dashboard');

Route::get('/application/{id}', [PropertiesController::class, 'getTenantsApplications'])
    ->middleware(['auth'])->name('application');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/add-property', function () {
    return view('landlord.add-property');
})->middleware(['auth'])->name('landlord.add-property');

Route::post('/post-property', [PropertiesController::class, 'createProperty'])
    ->middleware('auth')->name('post-property');

Route::get('/edit-property/{id}', [PropertiesController::class, 'editProperty'])
    ->middleware(['auth'])->name('edit-property');

Route::put('/update-property/{property}', [PropertiesController::class, 'updateProperty'])
    ->middleware(['auth'])->name('update-property');

Route::get('/my-properties', [PropertiesController::class, 'myProperties'])
    ->middleware(['auth'])->name('my-properties');


Route::get('/property/{id}', [PropertiesController::class, 'viewProperty'])
    ->name('property');

Route::get('/tenant/{id}', [TenantController::class, 'viewForm'])
    ->name('tenant');

Route::post('/tenant-application/{propertyId}', [TenantController::class, 'createForm'])
    ->name('tenant-application');



require __DIR__ . '/auth.php';
