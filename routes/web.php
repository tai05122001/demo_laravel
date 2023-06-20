<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;

// Route::get('/',[PagesController::class => 'index']);
// Route::get('/products', [ProductsController::class , 'index'])->name('products');

// dùng hàm where để tiến hành vadidate cho variable trên URL 
// Route::get('/products/{id}', [ProductsController::class, 'detail'])->where(['id' =>'[0-9]']);       

// Route::get('/products/{productName}/{id}', 
// [
//     ProductsController::class,
//     'detail'
//     ])->where([
//         'productName' =>'[a-zA-Z0-9]+',
//         'id'=>'[0-9]',



// ]);  


// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/users', function () {
//     return 'This is user page ';  

// });
// Route::get('/foods', function () {
//     return ['sushi', 'cake', 'candy'];  

// });

// Route::get('/profile', function () {
//     return response()->json([
//         "name"=>"Trần Tấn Tài",
//         'gmail'=> 'tai05122001@gmail.com'
//     ]);

// });
// //dùng router để chuyển trang hiện tại sang trang khác gọi là redirect
// Route::get('/something', function () {
//     return redirect('/');

// });