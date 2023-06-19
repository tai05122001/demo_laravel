<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Lâm nhật ánh xin đẹp';
        return view('products.index');
    }
    public function about(){
        return 'This is about company page';
    }
}
