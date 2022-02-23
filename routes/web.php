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
// Route::get('/login', function(){
//     return redirect('/home');
// });
Route::get('/admin-logout', 'App\Http\Controllers\Root\RootController@logout');
Route::get('/admin', 'App\Http\Controllers\Auth\LoginController@admin');

/** Guest Routes */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/exhibitions', 'App\Http\Controllers\HomeController@exhibition');
Route::get('/exhibition/{id}', 'App\Http\Controllers\HomeController@exhibition_detail');
Route::get('/collections', 'App\Http\Controllers\HomeController@collections');
Route::get('/murals', 'App\Http\Controllers\HomeController@murals');
Route::get('/gallery', 'App\Http\Controllers\HomeController@gallery');
Route::get('/gallery/{type}', 'App\Http\Controllers\HomeController@gallery');
Route::get('/gallery/detail/{id}', 'App\Http\Controllers\HomeController@gallery_detail');
Route::get('/store', 'App\Http\Controllers\HomeController@store');
Route::get('/store/{id}', 'App\Http\Controllers\HomeController@store_detail');
// Route::get('/gallery/testiminials', 'App\Http\Controllers\HomeController@testiminials');
Route::get('/artist-profile', 'App\Http\Controllers\HomeController@artist_profile');
// Route::get('/faq', 'App\Http\Controllers\HomeController@faq');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
Route::post('/contact', 'App\Http\Controllers\HomeController@contact_send');
Route::post('/newsletter', 'App\Http\Controllers\HomeController@newsletter');
Route::get('/unsubscribe-newsletter/{email}', 'App\Http\Controllers\HomeController@unsubscripe_newsletter');

/** Admin Routes */
Route::get('/root', 'App\Http\Controllers\Root\RootController@index');
Route::get('/root/home', 'App\Http\Controllers\Root\RootController@index');

Route::get('/root/gallery', 'App\Http\Controllers\Root\GalleryController@index');
Route::post('/root/gallery', 'App\Http\Controllers\Root\GalleryController@store');
Route::get('/root/gallery/{id}', 'App\Http\Controllers\Root\GalleryController@show');
Route::patch('/root/gallery/{id}', 'App\Http\Controllers\Root\GalleryController@update');
Route::get('/root/gallery/delete/{id}', 'App\Http\Controllers\Root\GalleryController@destroy1');

Route::get('/root/exhibitions', 'App\Http\Controllers\Root\ExhibitionController@index');
Route::post('/root/exhibitions', 'App\Http\Controllers\Root\ExhibitionController@store');
Route::get('/root/exhibition/{id}', 'App\Http\Controllers\Root\ExhibitionController@show');
Route::patch('/root/exhibition/{id}', 'App\Http\Controllers\Root\ExhibitionController@update');
Route::post('/root/exhibition/{id}', 'App\Http\Controllers\Root\ExhibitionController@store1');
Route::get('/root/exhibition/{id}/{item}', 'App\Http\Controllers\Root\ExhibitionController@show1');
Route::patch('/root/exhibition/{id}/{item}', 'App\Http\Controllers\Root\ExhibitionController@update1');
Route::get('/root/exhibition-delete/delete-image/{id}', 'App\Http\Controllers\Root\ExhibitionController@destroy1');

Route::get('/root/murals', 'App\Http\Controllers\Root\MuralController@index');
Route::post('/root/murals', 'App\Http\Controllers\Root\MuralController@store');
Route::get('/root/mural/{id}', 'App\Http\Controllers\Root\MuralController@show');
Route::patch('/root/mural/{id}', 'App\Http\Controllers\Root\MuralController@update');
Route::get('/root/mural/delete/{id}', 'App\Http\Controllers\Root\MuralController@destroy1');

Route::get('/root/store', 'App\Http\Controllers\Root\StoreController@index');
Route::post('/root/store', 'App\Http\Controllers\Root\StoreController@store');
Route::get('/root/store/{id}', 'App\Http\Controllers\Root\StoreController@show');
Route::patch('/root/store/{id}', 'App\Http\Controllers\Root\StoreController@update');
Route::get('/root/store/delete/{id}', 'App\Http\Controllers\Root\StoreController@destroy1');

/** Client Routes */
Route::get('/dashboard', function(){
    return redirect('/root');
})->middleware(['auth', 'user.auth']);
