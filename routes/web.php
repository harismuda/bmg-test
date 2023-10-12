<?php

use App\Http\Controllers\ContentArtikelController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/detail', [FrontendController::class, 'detail']);

Route::middleware(['guest'])->group(
    function () {
        Route::get('/login', [SesiController::class, 'index'])->name('login');
        Route::post('/masuk', [SesiController::class, 'masuk']);
        Route::get('/register', [SesiController::class, 'register']);
        Route::post('/register', [SesiController::class, 'store']);
    }
);
Route::middleware(['auth'])->group(
    function () {
        Route::get('data-artikel', function(){
            return view('backend.artikel.index');
        });
        Route::resource('ajax', ArtikelController::class);
        Route::get('/addArtikel', [ArtikelController::class, 'create']);
        Route::post('/storeArtikel', [ArtikelController::class, 'store']);
        Route::get('/editArtikel/{id}', [ArtikelController::class, 'edit']);
        Route::put('/updateArtikel/{id}', [ArtikelController::class, 'update']);
        Route::get('/destroyArtikel/{id}', [ArtikelController::class, 'destroy']);

        Route::get('/content', function () {
            return view('backend.artikel.content.content');
        });
        Route::resource('ajaxContent', ContentArtikelController::class);
        Route::get('/add', [ContentArtikelController::class, 'create']);
        Route::post('/storeContent', [ContentArtikelController::class, 'store']);
        Route::get('/edit/{id}', [ContentArtikelController::class, 'edit']);
        Route::put('/update/{id}', [ContentArtikelController::class, 'update']);
        Route::get('/destroy/{id}', [ContentArtikelController::class, 'destroy']);

        Route::get('/logout', [SesiController::class, 'logout']);
    }
);
