<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\responsable_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

// Route::get('/Responsable', [responsable_controller::class, 'index'])->name('Responsable');

Route::get('/Responsable', [responsable_controller::class, 'index'])->name('Responsable');
Route::get('/clubs', [ClubController::class, 'index'])->name('clubs');
Route::get('/clubs/{club}/edit', [ClubController::class, 'edit'])->name('clubs.edit');
Route::put('/clubs/{club}', [ClubController::class, 'update'])->name('clubs.update');
Route::delete('/clubs/{club}', [ClubController::class, 'destroy'])->name('clubs.destroy');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
Route::get('/Posts', [PostController::class, 'posts'])->name('posts');


Route::get('/responsables/add', [ResponsableController::class, 'add'])->name('addResponsable');
Route::get('/responsables/{id}/edit', [ResponsableController::class, 'edit'])->name('editResponsable');
Route::post('/responsables/{id}/delete', [ResponsableController::class, 'delete'])->name('deleteResponsable');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/createClub',  [ClubController::class, 'create'])->name('clubs.create');
Route::get('/clubs/create', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/clubs', [ClubController::class, 'store'])->name('clubs.store');


Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::delete('/events/{event}/destroy', [EventController::class, 'destroy'])->name('events.destroy');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::put('/events/{event}', [ClubController::class, 'update'])->name('events.update');

require __DIR__.'/auth.php';
