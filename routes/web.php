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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personinformation',[\App\Http\Controllers\PersonInformationController::class,'index']);
//Route::get('/blog/create/post', [\App\Http\Controllers\PersonInformationController::class, 'create']); //shows create person form
//Route::post('/blog/create/post', [\App\Http\Controllers\PersonInformationController::class, 'store']); //saves the created person to the databse
//Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\PersonInformationController::class, 'edit']); //shows edit person form
//Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\PersonInformationController::class, 'update']); //commits edited person to the database 
//Route::delete('/blog/{blogPost}', [\App\Http\Controllers\PersonInformationController::class, 'destroy']); //deletes person from the database
