<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InsertProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//admin section
Route::prefix('admin')->middleware(['auth','adminOnly'])->group(function(){
    Route::get('/addProduct',[InsertProductController::class,'create']);
    Route::get('/editProduct',[InsertProductController::class,'edit']);
    Route::get('/displayProduct',[InsertProductController::class,'index']);
    Route::get('/updateProduct',[InsertProductController::class,'update']);
});

