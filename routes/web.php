<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreControllers;
use App\Http\Controllers\DisqueControllers;
use App\Http\Controllers\ArtisteControllers;
use App\Http\Controllers\DashboardControllers;


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

// = Quand on est à la route /home, il faut aller chercher 
//la class GenreControllers pour retourner la fonction index

Route::get('/', [DashboardControllers::class, 'index']);

Route::get('/artiste', [ArtisteControllers::class, 'list']);
Route::get('/artiste/create', [ArtisteControllers::class, 'create']);
Route::post('/artiste/create', [ArtisteControllers::class, 'create']);
Route::get('/artiste/show/{id}', [ArtisteControllers::class, 'show']);
Route::get('/artiste/update/{id}', [ArtisteControllers::class, 'update']);
Route::post('/artiste/update/{id}', [ArtisteControllers::class, 'update']);
Route::get('/artiste/{id}', [ArtisteControllers::class, 'delete']);


Route::get('/genre', [GenreControllers::class, 'list']);
Route::get('/genre/create', [GenreControllers::class, 'create']);
Route::post('/genre/create', [GenreControllers::class, 'create']);
Route::get('/genre/show/{id}', [GenreControllers::class, 'show']);
Route::get('/genre/update/{id}', [GenreControllers::class, 'update']);
Route::post('/genre/update/{id}', [GenreControllers::class, 'update']);
Route::get('/genre/{id}', [GenreControllers::class, 'delete']);
Route::post('/genre/{id}', [GenreControllers::class, 'delete']);


Route::get('/disque', [DisqueControllers::class, 'list']);
Route::get('/disque/create', [DisqueControllers::class, 'create']);
Route::post('/disque/create', [DisqueControllers::class, 'create']);
Route::get('/disque/show/{id}', [DisqueControllers::class, 'show']);
Route::get('/disque/update/{id}', [DisqueControllers::class, 'update']);
Route::post('/disque/update/{id}', [DisqueControllers::class, 'update']);
Route::get('/disque/{id}', [DisqueControllers::class, 'delete']);


