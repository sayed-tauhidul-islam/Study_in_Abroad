<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\SearchController;

// --- Public Routes ---

Route::get('/', function () {
    return view('home');
});


// Admin dashboard route (session-based admin login, no 'auth' middleware)
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
Route::get('/admin', function () {
    return redirect('/admin/dashboard');
})->middleware('admin');

// Route to display the login form. MUST be named 'login' for the middleware to work.
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route to handle the login form submission.
Route::post('/login', [LoginController::class, 'login']);

// Optional: Logout route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// --- Public Routes for Listings ---
Route::get('/countries', [CountryController::class, 'publicIndex'])->name('countries.index');
Route::get('/universities', [UniversityController::class, 'publicIndex'])->name('universities.index');
Route::get('/courses', [CourseController::class, 'publicIndex'])->name('courses.index');
Route::get('/posts', [PostController::class, 'publicIndex'])->name('posts.index');
Route::get('/reviews', [ReviewController::class, 'publicIndex'])->name('reviews.index');
Route::get('/scholarships', [ScholarshipController::class, 'publicIndex'])->name('scholarships.index');
Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');

// --- Resource Routes for Dynamic Content (Admin) ---
Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::resource('countries', CountryController::class)->names([
        'index' => 'countries.index',
        'create' => 'countries.create',
        'store' => 'countries.store',
        'show' => 'countries.show',
        'edit' => 'countries.edit',
        'update' => 'countries.update',
        'destroy' => 'countries.destroy'
    ]);
    Route::resource('courses', CourseController::class)->names([
        'index' => 'courses.index',
        'create' => 'courses.create',
        'store' => 'courses.store',
        'show' => 'courses.show',
        'edit' => 'courses.edit',
        'update' => 'courses.update',
        'destroy' => 'courses.destroy'
    ]);
    Route::resource('posts', PostController::class)->names([
        'index' => 'posts.index',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'show' => 'posts.show',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy'
    ]);
    Route::resource('reviews', ReviewController::class)->names([
        'index' => 'reviews.index',
        'create' => 'reviews.create',
        'store' => 'reviews.store',
        'show' => 'reviews.show',
        'edit' => 'reviews.edit',
        'update' => 'reviews.update',
        'destroy' => 'reviews.destroy'
    ]);
    Route::resource('applications', ApplicationController::class)->names([
        'index' => 'applications.index',
        'create' => 'applications.create',
        'store' => 'applications.store',
        'show' => 'applications.show',
        'edit' => 'applications.edit',
        'update' => 'applications.update',
        'destroy' => 'applications.destroy'
    ]);
    Route::resource('universities', UniversityController::class)->names([
        'index' => 'universities.index',
        'create' => 'universities.create',
        'store' => 'universities.store',
        'show' => 'universities.show',
        'edit' => 'universities.edit',
        'update' => 'universities.update',
        'destroy' => 'universities.destroy'
    ]);
    Route::resource('scholarships', ScholarshipController::class)->names([
        'index' => 'scholarships.index',
        'create' => 'scholarships.create',
        'store' => 'scholarships.store',
        'show' => 'scholarships.show',
        'edit' => 'scholarships.edit',
        'update' => 'scholarships.update',
        'destroy' => 'scholarships.destroy'
    ]);
});

Route::get('/search', [SearchController::class, 'search'])->name('search');
