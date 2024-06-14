<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/refuges', function () {
    return view('refuges');
});

Route::get('/legislations', function () {
    return view('legislations');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/mentions', function () {
    return view('mentions');
});

Route::get('/credits', function () {
    return view('credits');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'submitForm']);
Route::get('/admin/messages', [ContactController::class, 'showMessages']);
Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');

