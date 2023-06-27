<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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


Route::middleware(['validation'])->group(function (){
    Route::get('showaddPost',[PostController::class,'showaddPost'])->name('showaddPost');
    Route::post('store',[PostController::class,'store'])->name('store');
    Route::get('showDashboard',[PostController::class,'Admindashboard']);
    Route::post('AdminInfo',[PostController::class,'storeAdminInfo'])->name('storeAdminInfo');
    Route::get('showAdminInfo',[PostController::class,'showAdminInfo'])->name('showAdminInfo');
    Route::get('showaddpost',[PostController::class,'showaddpost'])->name('showaddpost');
    Route::get('about',[PostController::class,'about'])->name('about');
    Route::get('editUpdate/{id}',[PostController::class,'editUpdate'])->name('editUpdate');
    Route::post('updatePost/{id}',[PostController::class,'updatePost'])->name('updatePost');
});


Route::get('homepage',[PostController::class,'homepage'])->name('homepage');



Route::post('destory/{id}',[PostController::class,'destory'])->name('destory');


//Route::get('/', function () {
//    return view('index');
//})->name('AdminSide/index');


//Auth
Route::get('/',[CustomAuthController::class,'home']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login',[CustomAuthController::class,'index'])->name('login');
Route::post('postlogin',[CustomAuthController::class,'login'])->name('postlogin');
Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');




