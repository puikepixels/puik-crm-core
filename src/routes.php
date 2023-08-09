<?php
use Illuminate\Support\Facades\Route;
use Puikepixels\PuikCrmCore\Http\Controllers\CustomerController;
use Puikepixels\PuikCrmCore\Http\Controllers\CustomerGroupController;
use Puikepixels\PuikCrmCore\Http\Controllers\CustomerNoteController;
use Puikepixels\PuikCrmCore\Http\Controllers\DashboardController;
use Puikepixels\PuikCrmCore\Http\Controllers\ProjectController;
use Puikepixels\PuikCrmCore\Http\Controllers\TaskController;
use Puikepixels\PuikCrmCore\Http\Controllers\TaskPriorityController;
use Puikepixels\PuikCrmCore\Http\Controllers\TaskStatusController;
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




$authMiddleware = config('jetstream.guard')
? 'auth:'.config('jetstream.guard')
: 'auth';

$authSessionMiddleware = config('jetstream.auth_session', false)
? config('jetstream.auth_session')
: null;



Route::middleware([
    'web',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::middleware('auth:sanctum')->get('/test', function () {
        return config('jetstream.guard');
    });

    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');


    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');


    Route::resource('/customers', CustomerController::class);
    Route::resource('/customergroups', CustomerGroupController::class);
    Route::resource('/customernotes', CustomerNoteController::class);

    Route::resource('/projects', ProjectController::class);

    Route::resource('/tasks', TaskController::class);
    Route::resource('/taskstatuses', TaskStatusController::class);
    Route::resource('/taskpriorities', TaskPriorityController::class);


});
