<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'frontend'])->name('front');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// MUSIC ROUTES
Route::get('/CreateMusicForm', [App\Http\Controllers\MusicController::class, 'CreateMusicForm'])->name('CreateMusicForm');
Route::post('/createmusic', [App\Http\Controllers\MusicController::class, 'CreateMusic'])->name('CreateMusic');
Route::get('/showmusics', [App\Http\Controllers\MusicController::class, 'ShowMusic'])->name('ShowMusic');
Route::get('/MusicEditForm/{music}', [App\Http\Controllers\MusicController::class, 'MusicEditForm'])->name('MusicEditForm');
Route::post('/Editmusic/{music}', [App\Http\Controllers\MusicController::class, 'EditMusic'])->name('EditMusic');
Route::post('/Deletemusic/{music}', [App\Http\Controllers\MusicController::class, 'DeleteMusic'])->name('DeleteMusic');


// VIDEO ROUTES
Route::get('/createVideo', [App\Http\Controllers\VideoController::class, 'CreateVideoForm'])->name('CreateVideoForm');
Route::post('/createVideo', [App\Http\Controllers\VideoController::class, 'CreateVideo'])->name('CreateVideo');
Route::get('/showVideo', [App\Http\Controllers\VideoController::class, 'ShowVideo'])->name('ShowVideo');
Route::get('/VideoEditForm/{Video}', [App\Http\Controllers\VideoController::class, 'VideoEditForm'])->name('VideoEditForm');
Route::post('/EditVideo/{Video}', [App\Http\Controllers\VideoController::class, 'EditVideo'])->name('EditVideo');
Route::post('/DeleteVideo/{Video}', [App\Http\Controllers\VideoController::class, 'DeleteVideo'])->name('DeleteVideo');


Route::get('/createmusic', [App\Http\Controllers\UserController::class, 'Show'])->name('show');


//ADMIN ROUTES
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::post('admin-password/email',[App\Http\Controllers\Admin\ForgotPasswordController::class, 'sendResetLink'])->name('admin.password.email');
Route::post('admin-password/reset',[App\Http\Controllers\Admin\ResetPasswordController::class, 'reset'])->name('admin.password.update ');
Route::get('admin-password/reset',[App\Http\Controllers\Admin\ForgotPasswordController::class, 'showLinkReque'])->name('admin.password.request');
Route::get('admin-password/reset/{token}',[App\Http\Controllers\Admin\ResetPasswordController::class, 'showResetForm '])->name('admin.password.reset');
Route::post('/admin-register',[App\Http\Controllers\Admin\RegisterController::class, 'register']);
Route::post('/admin-logout',[App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');

//Search Route
Route::post('/search', [App\Http\Controllers\FrontendController::class, 'search'])->name('search');
