<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Test;
use App\Livewire\Products\Products;
use App\Livewire\Products\Create;
use App\Livewire\Products\Categories;

Route::get('/',Dashboard::class)->name('dashboard');
Route::prefix('products')->group(function(){
    Route::get('/',Products::class)->name('admin.products');
    Route::get('/create',Create::class)->name('create.product');
    Route::get('/categories',Categories::class)->name('product.categories');
});
Route::get('/test',Test::class);
