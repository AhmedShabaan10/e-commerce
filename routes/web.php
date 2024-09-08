<?php
namespace App\Http\Controllers;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//login Admin & Normal user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//////////////////User////////////////////

//About
Route::get('/about', function () {
    return view('about');
});

//Shop
Route::get('/shop', function () {
    return view('shop');
});

//Home
Route::get('/', function () {
    return view('welcome');
});

//cart
Route::get('/cart',[MainController::class , 'v_cart']);

//wish list
Route::get('/Wish',[MainController::class , 'v_wish_list']);

//profile
Route::get('/profile', [MainController::class, 'v_profile']);
Route::patch('/profile', [MainController::class, 'u_profile_pic']);

//Men  
Route::get('/Category/Men',[MainController::class , 'men']);
//M_product_show
Route::get('/Category/Men/{product}',[MainController::class , 'men_product']);

//Women
Route::get('/Category/Women',[MainController::class , 'women']);

//Kids
Route::get('/Category/Kids',[MainController::class , 'Kids']);


