<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnologyController;
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
})->name('login');

Route::controller(ViewController::class)->group(function () {
    Route::get('/projects', 'allProjects')->name('projects');
    Route::get('/projects/{project}', 'showProjects')->name('show.projects');
    Route::get('/services', 'allServices')->name('services');
    Route::get('/about-me', 'allAboutme')->name('about-me');
    Route::get('/blog', 'allBlogs')->name('blog');
    Route::get('/contact', 'allContact')->name('contact');
    Route::post('/contact', 'storeContact')->name('storecontact');
});

// admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('/projects', ProjectController::class)
        ->names(['index' => 'admin.projects', 'store' => 'admin.projects.store', 'update' => 'admin.projects.update', 'destroy' => 'admin.projects.delete'])
        ->except(['create', 'edit']);

    // Services
    Route::resource('/services', ServiceController::class)
        ->names(['index' => 'admin.services', 'store' => 'admin.services.store', 'update' => 'admin.services.update', 'destroy' => 'admin.services.delete'])
        ->except(['create', 'show', 'edit']);

    // Technologies
    Route::resource('/technologies', TechnologyController::class)
        ->names(['index' => 'admin.tech', 'store' => 'admin.tech.store', 'update' => 'admin.tech.update', 'destroy' => 'admin.tech.delete'])
        ->except(['create', 'show', 'edit']);

    // Blog
    Route::resource('/blog', BlogController::class)
        ->names(['index' => 'admin.blog', 'store' => 'admin.blog.store', 'update' => 'admin.blog.update', 'destroy' => 'admin.blog.delete'])
        ->except(['create', 'edit']);

    // Company
    Route::resource('/companies', CompanyController::class)
        ->names(['index' => 'admin.company', 'store' => 'admin.company.store', 'update' => 'admin.company.update', 'destroy' => 'admin.company.delete'])
        ->except(['create', 'edit']);
    
    // Contacts
    Route::resource('/contacts', ContactController::class)
        ->names(['index' => 'admin.contacts'])
        ->only(['index']);

});
