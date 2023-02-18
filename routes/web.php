<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

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

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/forum', function () {
    return view('forumPage.forumPage');
});

Route::get('/promotion', function () {
    return view('promotion.promotionPage');
});


Route::middleware(['auth', 'verified', 'profile'])->group(function () {
    Route::get('/addevent', [EventController::class, 'create'])->name('addevent.index');
    Route::post('/addevent', [EventController::class, 'store'])->name('addevent.store');
    Route::get('/event', [EventController::class, 'event'])->name('event');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/dashboard/select/{id}',[DashboardController::class,'selectedEventDashboard'])->name('selected.event.dashboard');
    Route::get('/feedback', [EventController::class, 'feedback'])->name('feedback');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/post', [ProfileController::class, 'store'])->name('profile.store');
});

require __DIR__ . '/auth.php';
