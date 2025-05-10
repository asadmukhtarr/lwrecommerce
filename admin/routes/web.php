<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Test;
use App\Livewire\Products\Products;
use App\Livewire\Products\Create;
use App\Livewire\Products\Categories;
use App\Livewire\Products\View;
use App\Livewire\Customers;
use App\Livewire\Orders\Orders;
use App\Livewire\Orders\Neworder;

Route::get('/',Dashboard::class)->name('dashboard');
Route::prefix('products')->group(function(){
    Route::get('/',Products::class)->name('admin.products');
    Route::get('/view/{id}',View::class)->name('view.product');
    Route::get('/create',Create::class)->name('create.product');
    Route::get('/categories',Categories::class)->name('product.categories');
});
Route::prefix('/orders')->group(function(){
    Route::get('/new',Neworder::class)->name('new.order');
    Route::get('/history',Orders::class)->name('history.order');
});
Route::get('/customer',Customers::class)->name('customers');
Route::get('/test',Test::class);
