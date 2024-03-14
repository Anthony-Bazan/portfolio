<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\awardsController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\workController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\contactController;



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
    return view('welcome');
});

//home
Route::get('/home', [homeController::class, 'index'])->name('home.index');

// admin
Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::post('/admin/{id}/update', [adminController::class, 'update'])->name('admin.update');



// about
Route::get('/about', [aboutController::class, 'index'])->name('about.index');
Route::put('/about/{id}/update', [aboutController::class, 'update'])->name('about.update');
Route::put('/about/{id}/updates', [aboutController::class, 'updates'])->name('about.description');
Route::post('/about/add', [aboutController::class, 'add'])->name('about.add');


// education 
Route::get('/education', [educationController::class, 'index'])->name('education.index');
Route::post('/education/{id}/description', [educationController::class, 'description'])->name('education.description');
Route::put('/education/{id}/update', [educationController::class, 'update'])->name('education.update');
Route::post('/education/add', [educationController::class, 'add'])->name('education.add');

// skill
Route::get('/skill', [skillController::class, 'index'])->name('skill.index');
Route::post('/skill/add', [skillController::class, 'add'])->name('skill.add');
Route::put('/skill/{id}/update', [skillController::class, 'update'])->name('skill.update');

// awards
Route::get('/awards', [awardsController::class, 'index'])->name('awards.index');
Route::post('/awards/add', [awardsController::class, 'add'])->name('awards.add');
Route::put('/awards/{id}/update', [awardsController::class, 'update'])->name('awards.update');


// experience
Route::get('/experience', [experienceController::class, 'index'])->name('experience.index');
Route::post('/experience/add', [experienceController::class, 'add'])->name('experience.add');
Route::put('/experience/{id}/update', [experienceController::class, 'update'])->name('experience.update');
Route::delete('/experience/{id}/delete', [experienceController::class, 'destroy'])->name('experience.delete');

// services
Route::get('/services', [servicesController::class, 'index'])->name('services.index');

// work
Route::get('/work', [workController::class, 'index'])->name('work.index');

// client
Route::get('/client', [clientController::class, 'index'])->name('client.index');

// contact
Route::get('/contact', [contactController::class, 'index'])->name('contact.index');