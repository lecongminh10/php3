<?php

use App\Http\Controllers\InforController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// GET , POST , PUT , PATH , DELETE 

// Route::get('test' , function(){
//     echo "123";
// });
// Route::get('/' , function(){
//     echo "trangchu";
// });

// Route::get('/list-product' , [ProductController::class , 'index']);
// Route::get('get-product/{id}' , [ProductController::class , 'show']);
// Route::get('update-product/{id}' , [ProductController::class , 'edit']);

Route::get('thongtinsv' , [InforController::class , 'thongtinsv']);