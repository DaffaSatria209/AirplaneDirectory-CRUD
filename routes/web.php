<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get ('/',[PostController::class,'index'])->name ('homepage');

Route::get ('/detail/{post}',[PostController::class,'detailPost'])->name('detailpost');

Route::get ('/edit/{id}',[PostController::class,'displayPost'])->name('displaypost');
Route::post ('update/{id}',[PostController::class,'updatePost'])->name('updatepost');

Route::get ('/add/addPost',[PostController::class,'addPost'])->name('addpost');
Route::post('insert-data',[PostController::class,'insertPost'])->name('insertpost');

Route::get('/token', function (Request $request) {
    $token = $request->session()->token(); 
    $token = csrf_token();
    });

Route::get ('/delete/{post}',[PostController::class,'deletePost'])->name('deletepost');
