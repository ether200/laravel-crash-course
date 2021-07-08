<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

// Default route -> return view
Route::get('/', function () {
    # Referring to .env file
    // return env('CREATOR_NAME');
    return view('home');
});

/* When using a controller you name it first with ::class and 2nd argument is the fn we want to use
    Laravel 8 (New)
*/
# name => named routes, easy to navigate using the route global method in the view components
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/about', [ProductsController::class, 'about'])->name('about');

# Route parameters => Pattern is integer
// Passing a regex to where to make the parameter follow a patern, if it fails it returns a 404 page
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');

# Pattern is a string
// Route::get('/products/{name}', [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');

# Multiple parametters with pattern
Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-zA-Z]+',
    'id' => '[0-9]+',
]);

/*
    Another laravel 8 way
*/
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Before Laravel 8 -> DOES NOT WORK ON PHP 8
// Route::get('/products', 'ProductsController@index');


