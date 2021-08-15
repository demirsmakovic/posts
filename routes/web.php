<?php
use App\Http\Controllers\PostsController;
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


Route::get('posts', [PostsController::class, 'index']);
Route::get('post/create', [PostsController::class, 'create']);
Route::post('post/create', [PostsController::class, 'store']);
Route::get('post/{id}', [PostsController::class, 'show']);
Route::get('post/{post}/edit', [PostsController::class, 'edit']);
Route::put('post/{post}/edit', [PostsController::class, 'update']);
Route::get('post/{post}/delete', [PostsController::class, 'delete']);
