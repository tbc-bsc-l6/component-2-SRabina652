<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\userController;
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

Route::get('/addItem',function(){
    return view('admin.product')->name('admin.product');
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


// admin section
Route::prefix('admin')->middleware(['auth','adminOnly'])->group(function(){
   Route::resource('product', ProductController::class);

   //for users
   Route::get('/users',[userController::class,'index']);
   Route::get('/addUsers',[userController::class,'create']);
    Route::post('/addUsers',[userController::class,'store']);
    Route::delete('/user/delete/{id}',[userController::class,'destroy'])->name('user.delete');

});


//to fetch the data of the users
