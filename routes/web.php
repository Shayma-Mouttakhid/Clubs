<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\responsable_controller;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/Responsable', [responsable_controller::class, 'index'])->name('Responsable');
Route::get('/Clubs', [ClubController::class, 'clubs'])->name('clubs');
Route::get('/clubs/{club}/edit',  [ClubController::class, 'edit'])->name('clubs.edit');
Route::delete('/clubs/{club}', [ClubController::class, 'destroy'])->name('clubs.destroy');
Route::get('/clubs', [ClubController::class, 'Ajouter'])->name('clubs.create');
Route::get('/Posts', [PostController::class, 'posts'])->name('posts');


Route::get('/responsables/add', [ResponsableController::class, 'add'])->name('addResponsable');
Route::get('/responsables/{id}/edit', [ResponsableController::class, 'edit'])->name('editResponsable');
Route::post('/responsables/{id}/delete', [ResponsableController::class, 'delete'])->name('deleteResponsable');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
