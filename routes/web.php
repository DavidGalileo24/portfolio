<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ViewController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome');
});
Route::get('/login', function () {
    return Inertia::render('Auth/Login');
});

Route::controller(ViewController::class)->group(function () {
    //Project
    Route::post('/projects', 'allProjects')->name('projects');
});

//admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::controller(ProjectController::class)->group(function () {
        Route::get('/projects', 'index')->name('admin.projects');
        Route::post('/projects', 'store')->name('admin.projects.store');
        Route::put('/projects/{project}', 'update')->name('admin.projects.update');
        Route::delete('/projects/{project}', 'destroy')->name('admin.projects.delete');
    });

    //Services
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/services', 'index')->name('services');
    });

    //Blog
    Route::controller(BlogController::class)->group(function () {
        Route::get('/blog', 'index')->name('blog');
    });
});
