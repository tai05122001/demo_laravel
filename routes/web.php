<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('products', [ProductsController::class , 'index']);


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