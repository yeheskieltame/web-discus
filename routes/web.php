<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [DashboardController::class, 'home']);

Route::group(['middleware' => ['auth']], function() {
  // CRUD Kategori
  // create category
  Route::get('/category/create', [CategoryController::class, 'create']);
  // store data to database & validation
  Route::post('/category', [CategoryController::class, 'store']);
  // view data
  Route::get('/category', [CategoryController::class, 'index']);
  // detail data by id
  Route::get('/category/{id}', [CategoryController::class, 'show']);
  // form update data by id
  Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
  // store updated data by id
  Route::put('/category/{id}', [CategoryController::class, 'update']);
  // delete data by id
  Route::delete('/category/{id}', [CategoryController::class, 'destroy']);


  //CRUD pertanyaan
  Route::get('/pertanyaan/create',[QuestionController::class, 'create']);
  Route::post('/pertanyaan', [QuestionController::class, 'store']);
  Route::get('/pertanyaan', [QuestionController::class, 'index']);
  Route::get('/pertanyaan/{id}', [QuestionController::class, 'show']);
  Route::get('/pertanyaan/{id}/edit', [QuestionController::class, 'edit']);
  Route::put('/pertanyaan/{id}', [QustionController::class, 'update']);
  Route::delete('/pertanyaan/{id}', [QuestionController::class, 'destroy']);

  // create jawaban// CRUD Jawaban
  Route::get('/jawaban/tambah', [AnswerController::class, 'create']);
  // store data to database & validation
  Route::post('/jawaban', [AnswerController::class, 'store']);
  // view data
  Route::get('/jawaban', [AnswerController::class, 'index']);
  // detail data by id
  Route::get('/jawaban/{id}', [AnswerController::class, 'show']);
  Route::get('/jawaban/{id}/edit', [AnswerController::class, 'edit']);
  // store updated data by id
  Route::put('/jawaban/{id}', [AnswerController::class, 'update']);
  // delete data by id
  Route::delete('/jawaban/{id}', [AnswerController::class, 'destroy']);

  // Update Profile
  Route::get('/profile', [ProfileController::class, 'index']);
  Route::put('/profile/{id}', [ProfileController::class, 'update']);
});



// Auth
Auth::routes();
