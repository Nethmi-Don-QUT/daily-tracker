<?php

use App\Http\Controllers\PagesController;
use App\Mail\DailyReminderMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

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

/**
 * Display home page
 */
Route::get('/', [PagesController::class, 'index']);
/**
 * Display all the available posts
 */
Route::resource('posts', 'App\Http\Controllers\PostsController');
/**
 * Test email layout
 */
Route::get('/email', function () {return new DailyReminderMail();});

Auth::routes();

