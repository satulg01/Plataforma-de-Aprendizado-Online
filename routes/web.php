<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
 
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

	Route::resource('courses', CourseController::class)->names([
		'index' 	=> 'courses.index',
		'create' 	=> 'courses.create',
		'store' 	=> 'courses.store',
		'show' 		=> 'courses.show',
		'edit' 		=> 'courses.edit',
		'update' 	=> 'courses.update',
		'destroy' 	=> 'courses.destroy',
	]);
});
