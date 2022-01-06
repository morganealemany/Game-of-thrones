<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

/**
 * The homepage route
 */
Route::get(
    '/',
    [Controller::class, 'homePage']
)->name('homepage');

/**
 * The character details route
 */
Route::get(
    '/character/{id}',
    [Controller::class, 'characterPage']
)->name('character_page');

/**
 * The houses page route
 */
Route::get(
    '/houses',
    [Controller::class, 'houses']
)->name('houses');
