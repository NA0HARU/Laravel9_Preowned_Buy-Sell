<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
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
//1- Write in route
Route::get('/greeting', function () {
    return 'Hello World';
});
// 2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

// 3- Call controller func.
Route::get('/',[HomeController::class,'index'])->name('home');

// 4- Route-> Controller->View
Route::get('/test',[HomeController::class,'test'])->name('test');

// 5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');


// 6- lşkajsdflkjasdfajlskdfaş


Route::post('/save',[HomeController::class,'save'])->name('save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//**************** ADMİN PANEL ROUTES **************************
Route::prefix('admin')->name('admin.')->controller(AdminHomeController::class)->group(function () {
Route::get('/','index')->name('index');
//**************** ADMİN CATEGORY ROUTES **************************
Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {

Route::get('/','index')->name('index');
Route::get('/create','create')->name('create');
Route::post('/store','store')->name('store');
Route::get('/edit/{id}','edit')->name('edit');
Route::post('/update/{id}','update')->name('update');
Route::get('/destroy/{id}','destroy')->name('destroy');
Route::get('/show/{id}','show')->name('show');
});

//**************** ADMİN PRODUCT ROUTES **************************
Route::prefix('product' )->name('product.')->controller(AdminProductController::class)->group(function () {

    Route::get('/','index')->name('index');
    Route::get('/create','create')->name('create');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/destroy/{id}','destroy')->name('destroy');
    Route::get('/show/{id}','show')->name('show');
});
//**************** ADMİN IMAGE GALLERY ROUTES **************************
    Route::prefix('image' )->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });
});
