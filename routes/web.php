<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\PackageController as AdminPackageController; // Import Controller Paket
use App\Models\Book;
use App\Models\ContactMessage;
use App\Models\Package; // Import Model Paket

/*
|--------------------------------------------------------------------------
| Web Routes (Frontend / Public)
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/prosedur', [PageController::class, 'submission'])->name('submission');
Route::get('/katalog', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/buku/{book}', [PageController::class, 'bookDetail'])->name('book.detail');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');

Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Authentication Routes (Admin)
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])
    ->name('login')
    ->middleware('guest');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('login.perform')
    ->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Routes (Backend)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
    // DASHBOARD: Logic Statistik
    Route::get('/dashboard', function () {
        
        $stats = [
            'total_books'      => Book::count(),
            'total_authors'    => Book::distinct('author')->count('author'),
            'total_categories' => Book::distinct('category')->count('category'),
            'total_packages'   => Package::count(), // Tambahan statistik paket
        ];

        return view('admin.dashboard', compact('stats'));
    })->name('dashboard');

    // CRUD Routes
    Route::resource('books', AdminBookController::class);
    Route::resource('packages', AdminPackageController::class); // <-- Route Baru
    Route::resource('messages', AdminMessageController::class)->only(['index', 'destroy']);
});

// RUTE SEMENTARA UNTUK MEMPERBAIKI UUID DI CPANEL
Route::get('/fix-uuid', function() {
    $books = \App\Models\Book::whereNull('uuid')->get();
    $count = 0;
    foreach($books as $book) {
        $book->uuid = (string) \Illuminate\Support\Str::uuid();
        $book->save();
        $count++;
    }
    return "Berhasil memperbarui UUID untuk " . $count . " buku lama!";
});