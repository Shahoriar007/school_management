<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OnlineadmissionController;

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

// General Pages
// home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// honorable_teacher
Route::get('/honorable_teacher', function () {
    return view('honorable_teacher');
})->name('honorable_teacher');

// about
Route::get('/about', function () {
    return view('about');
})->name('about');

// aim
Route::get('/aim', function () {
    return view('aim');
})->name('aim');

// management_message
Route::get('/management_message', function () {
    return view('management_message');
})->name('management_message');

// info_for_parents
Route::get('/info_for_parents', function () {
    return view('info_for_parents');
})->name('info_for_parents');

// rules_and_regulation
Route::get('/rules_and_regulation', function () {
    return view('rules_and_regulation');
})->name('rules_and_regulation');

// extra_curricular_activities
Route::get('/extra_curricular_activities', function () {
    return view('extra_curricular_activities');
})->name('extra_curricular_activities');

// online_admission
Route::get('/online_admission', [OnlineadmissionController::class, 'index'])->name('online_admission');
Route::post('/online_admission', [OnlineadmissionController::class, 'create'])->name('online_admission_form');

// notices
Route::get('/notices', function () {
    return view('notices');
})->name('notices');

// news_events
Route::get('/news_events', function () {
    return view('news_events');
})->name('news_events');

// gallery
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// video
Route::get('/video', function () {
    return view('video');
})->name('video');

// contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';