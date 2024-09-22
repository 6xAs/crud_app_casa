<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/test-layout', function ()
{
    return view('test-layout');

});


###################### AQUI ESTÃO AS ROTAS DOS MEU CONTROLADOR PRODUTO ##############
Route::delete('/destroy/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/edit/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
