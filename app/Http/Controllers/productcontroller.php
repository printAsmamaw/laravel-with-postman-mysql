<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{

   public function store(Request $request){
    
        $product=new product;
         
         $product->productname=$request->productname;
         $product->price=$request->price;
         $product->quality=$request->quality;
         $product->brand=$request->brand;
         $product->save();
    }
}
