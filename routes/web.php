<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


// Redirects to the product Resource Controller
Route::get('/', function () {
    return redirect('/products');
});

Route::resource('products', productController::class);

Route::get('/category', function () {
    return redirect('/category');
});

Route::resource('category', \App\Http\Controllers\CategoryController::class);
?>
?>

