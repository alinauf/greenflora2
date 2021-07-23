<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FloraController;
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

Route::get('/', [FloraController::class, 'home']);

Route::get('our-services', [FloraController::class, 'ourServices']);
Route::get('rooms', [FloraController::class, 'rooms']);
Route::get('diving', [FloraController::class, 'diving']);
Route::get('maldives', [FloraController::class, 'maldives']);
Route::get('about-us', [FloraController::class, 'aboutUs']);
Route::get('contact-us', [FloraController::class, 'contactUs']);
Route::get('gallery', [FloraController::class, 'gallery']);
