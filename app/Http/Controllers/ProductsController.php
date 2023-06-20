<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Lâm nhật ánh xin đẹp';
    //    return view('products.index')->with('title', $title);
        $myphone = [ 'name'=> 'Trần Tấn Tài', 
        'gmail'=>'tai05122001@gmail.com',
        'isFavourite' => true
    ];
        //  return view('products.index', compact('myphone'));
        print_r(route('products'));
        return view('products.index');
    }
    public function about(){
        return 'This is about company page';
    }
    public function detail( $productName, $id){
        return 'Product id: '.$id.'<br/>'.'Product Name: '.$productName;
        // $phone = [
        //     'iphone15'=> 'iphone15',
        //     'samsung'=> 'samsung'
        // ];
        // return view('products.index', ['product' => $phone[$productName]?? 'unknown product']);

    
    }
}
