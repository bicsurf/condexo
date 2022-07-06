<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('home');


//Rotte di Login e Register
Route::get('/login', [PublicController::class , 'login'])->name('login');
Route::get('/register', [PublicController::class , 'register'])->name('register');

//Sezione rotte CRUD
    //Rotta Create
    //Rotta Store
    //Rotta Edit
    //Rotta Update
    //Rotta Delete
