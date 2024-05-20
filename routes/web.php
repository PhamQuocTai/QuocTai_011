<?php

use App\Http\Controllers\frontend\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;

Route::get('/',[HomeController::class,'home']);
Route::get('product',[ProductController::class,'product']);
Route::get('product/{slug}',[ProductController::class,'product_detail']);
Route::get('contact',[ContactController::class,'contact']);