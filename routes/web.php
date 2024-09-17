<?php

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/', function () {
    $products = Product::all();
    return view('homepage', [
        'products' => $products,
    ]);
})->name('homepage');

Route::get('/product/{product}', function (Product $product) {
    $product = Product::where('id', $product->id)->first();
    return view('homepage', compact('product'));
})->name('detail.product');
// end

Route::namespace('App\Http\Controllers')->group(function() {

    // Register
    Route::middleware('guest')->name("register.")->group(function() {
        Route::get('/register', 'RegisterController@index')->name("index");
        Route::post('/register', 'RegisterController@store')->name("store");
    });

    // Login
    Route::name('auth.')->group(function() {
        Route::get('/login', 'LoginController@index')->name("index")->middleware('guest');
        Route::post('/login', 'LoginController@authenticate')->name("login");
        Route::post('/logout', 'LoginController@logout')->name("logout")->middleware('auth');
    });

    Route::prefix('dashboard')->group(function () {

        // Dashboard
        Route::get('/', function() {
            return view('dashboard');
        })->middleware(['auth', 'role:admin']);

        // Product
        Route::name('product.')->group(function () {
            Route::middleware(['auth', 'role:admin'])->group(function() {
                Route::get('product', 'ProductController@index')->name('index');
                Route::get('product/create', 'ProductController@create')->name('create');
                Route::post('product/store', 'ProductController@store')->name('store');
                Route::get('product/{product}/edit', 'ProductController@edit')->name('edit');
                Route::patch('product/{product}/update', 'ProductController@update')->name('update');
                Route::delete('product/{product}/destroy', 'ProductController@destroy')->name('destroy');
            });
            Route::get('product/{product}', 'ProductController@show')->name('show');
        });

        // Transaction
        // Route::name('transaction.')->group(function () {
        //     Route::get('transaction', 'TransactionController@index')->name('index');
        // });

    });

    // Cart
    Route::name('cart.')->group(function () {

        Route::get('cart', 'CartController@index')->name('index');

        Route::middleware('auth')->group(function() {
            Route::post('cart/{product}', 'CartController@store')->name('store');
            Route::patch('cart/{cartDetail}', 'CartController@update')->name('update');
            Route::delete('cart/{cartDetail}', 'CartController@destroy')->name('destroy');
        });

    });

});







