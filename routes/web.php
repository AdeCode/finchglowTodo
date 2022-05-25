<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/todo',[TodoController::class,'index'])->name('todo.index');
Route::get('/create-todo',[TodoController::class,'create']);
Route::post('/todo',[TodoController::class,'store']);
Route::get('/edit-todo/{todo}',[TodoController::class,'edit']);
Route::patch('/edit-todo/{todo}',[TodoController::class,'update']);
Route::delete('/delete-todo/{todo}',[TodoController::class,'delete'])->name('todo.destroy');


Route::get('/home', [TodoController::class, 'index'])->name('home');

// Route::group(['middleware' => ['web','auth']], function () {

//     Route::get('/', function () {
//             return 'protected home page';
    
// });
