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

// 
Route::get('/home', [homeController::class, 'index'])->name('home.index');

// admin
Route::get('/admin', [adminController::class, 'index'])->name('admin.index');

// about
Route::get('/about', [aboutController::class, 'index'])->name('about.index');

// education 
Route::get('/education', [educationController::class, 'index'])->name('education.index');

// skill
Route::get('/skill', [skillController::class, 'index'])->name('skill.index');

// awards
Route::get('/awards', [awardsController::class, 'index'])->name('awards.index');


// experience
Route::get('/experience', [experienceController::class, 'index'])->name('experience.index');

// services
Route::get('/services', [servicesController::class, 'index'])->name('services.index');

// work
Route::get('/work', [workController::class, 'index'])->name('work.index');

// client
Route::get('/client', [clientController::class, 'index'])->name('client.index');

// contact
Route::get('/contact', [contactController::class, 'index'])->name('contact.index');