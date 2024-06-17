<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');

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

/* GESTION DES MESSAGES */
Route::middleware('auth')->group(function () {
    Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');
    Route::get('/admin/messages', [ContactController::class, 'showMessages']);
    Route::get('/contact', [ContactController::class, 'showForm']);
    Route::post('/contact', [ContactController::class, 'submitForm']);
});

/* GESTION DE LA FAQ */
Route::get('/faqs', [FAQController::class, 'index'])->name('faqs.index');
Route::get('/faqs/create', [FAQController::class, 'create'])->name('faqs.create');
Route::post('/faqs', [FAQController::class, 'store'])->name('faqs.store');
Route::get('/faqs/{faq}', [FAQController::class, 'show'])->name('faqs.show');
Route::get('/faqs/{faq}/edit', [FAQController::class, 'edit'])->name('faqs.edit');
Route::put('/faqs/{faq}', [FAQController::class, 'update'])->name('faqs.update');
Route::delete('/faqs/{faq}', [FAQController::class, 'destroy'])->name('faqs.destroy');

Route::get('/', [FAQController::class, 'indexForIndexView'])->name('index');
Route::get('/api/faqs', [FAQController::class, 'apiIndex'])->name('faqs.apiIndex');
