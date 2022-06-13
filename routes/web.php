<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');


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

// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     echo ("Nim   : 2041720223 <br>"); 
//     echo ("Nama  : Rahma Nurwakhidatul Hasanah <br>"); 
//     echo ("Kelas : TI-2G");
// });

// Route::get('/article/{id}', function ($id= '1') {
//     echo ("Ini adalah Halaman Artikel dengan ID " .$id);
// });

// Route::get('/article/{id}', function ($id= '2') {
//     echo ("Ini adalah Halaman Artikel dengan ID ".$id);
// });

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::get('/', function () {
//     echo "Hi, Selamat Datang";
// });

// Route::prefix('category') -> group(function () {
//     Route::get("/marbel-edu-games", function () {
//         echo "Selamat Datang di <br> Halaman Marbel Edu Games";
//     });
//     Route::get("/marbel-and-friends-kids-games", function () {
//         echo "Selamat Datang <br> Halaman Marbel and Friends Kids Games";
//     });
//     Route::get("/riri-story-books", function () {
//         echo "Selamat Datang <br> Halaman Riri Stroy Books";
//     });
//     Route::get("/kolak-kids-songs", function () {
//         echo "Selamat Datang <br> Halaman Kolak Kids Songs";
//     });
// });

// Route::prefix('news') -> group(function () {
//     Route::get("", function () {
//         echo "Halaman NEWS <br> Berisi berita";
//     });
//     Route::get("/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19", function () {
//         echo "Halaman Studio Berisi Berita <br> Berbagi Sembako Untuk Warga Sekitar Terdampak COVID-19";
//     });
// });

// Route::prefix('program') -> group(function () {
//     Route::get("/karir" , function () {
//         echo "Halaman Program Karir";
//     });
//     Route::get("/magang" , function () {
//         echo "Halaman Program Magang";
//     });
//     Route::get("/kunjungan-industri" , function () {
//         echo "Halaman Program Kunjungan Industri";
//     });
// });

// Route::get("/about-us" , function () {
//     echo "Nama : Rahma Nurwakhidatul Hasanah <br> Kelas : TI-2G <br> Nim : 2041720223";
// });




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', function(){
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





