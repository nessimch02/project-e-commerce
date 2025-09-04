<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function() {
     return view('home');
});

Route::get('/adminpanel', function() {
    return view('admin-panel');
})->name('adminpanel');

Route::get('/display', function() {
    return view('display-resource');
})->name('displayresource');

Route::get('/addproducts', function() {
    return view('add-product');
})->name('addproducts');

Route::get('/cartdivanoangolato', function() {
    return view('cart-divano-angolato');
})->name("cart-divano-angolato");

Route::get('/cartdivano', function() {
    return view('cart-divano');
})->name("cart-divano");

Route::get('/cartletto', function() {
    return view('cart-letto');
})->name("cart-letto");

Route::get('/divano-angolato', function () {
    return view('divano-angolato');
})->name('divano-angolato');

Route::get('/divano', function() {
    return view('divano');
})->name('divano');

Route::get('/letto', function() {
    return view('letto');
})->name("letto");

Route::get('/mainpage', function() {
    return view('mainpage');
})->name('mainpage');

Route::get('/manageproducts', function() {
    return view('manage-products');
})->name('manage-products');

Route::get('/manageusers', function() {
    return view('manage-users');
})->name('manage-users');

Route::get('/registerform', function() {
    return view('register-form');
})->name('register-form');


Route::get('/sign-in', function () {
    return view('sign-in');
})->name('sign-in');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('sign-in');
Route::post('/sign-in', [AuthController::class, 'login']);

Route::get('/registerform', [AuthController::class, 'showRegister'])->name('registerform');
Route::post('/registerform', [AuthController::class, 'register']);





















