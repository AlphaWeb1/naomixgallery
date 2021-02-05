<?php

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

/** Test Routes */
// Route::get('/', function () {
//     return view('welcome');
// });

/** Auth Routes */
// Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/register', function(){
    return redirect('/home');
});
Route::get('/admin-logout', 'App\Http\Controllers\Root\RootController@logout');
Route::get('/admin', 'App\Http\Controllers\Auth\LoginController@admin');

/** Guest Routes */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/exhibition', 'App\Http\Controllers\HomeController@exhibition');
Route::get('/collections', 'App\Http\Controllers\HomeController@collections');
Route::get('/murals', 'App\Http\Controllers\HomeController@murals');
Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery');
Route::get('/gallery/connections', 'App\Http\Controllers\HomeController@gallery_collections');
Route::get('/gallery/miniature', 'App\Http\Controllers\HomeController@miniature');
Route::get('/gallery/portraiture', 'App\Http\Controllers\HomeController@portraiture');
// Route::get('/gallery/testiminials', 'App\Http\Controllers\HomeController@testiminials');
Route::get('/artist-profile', 'App\Http\Controllers\HomeController@artist_profile');
Route::get('/new-store', 'App\Http\Controllers\HomeController@store');
// Route::get('/faq', 'App\Http\Controllers\HomeController@faq');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::post('/contact', 'App\Http\Controllers\HomeController@contact_send');
Route::post('/newsletter', 'App\Http\Controllers\HomeController@newsletter');
Route::get('/unsubscribe-newsletter/{email}', 'App\Http\Controllers\HomeController@unsubscripe_newsletter');

/** Admin Routes */
Route::get('/root', 'App\Http\Controllers\Root\RootController@index');
Route::get('/root/home', 'App\Http\Controllers\Root\RootController@index');

/** Client Routes */
