<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/prosedur', [PageController::class, 'submission'])->name('submission');
Route::get('/katalog', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');