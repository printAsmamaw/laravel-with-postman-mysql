<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class GetController extends Controller
{
    public function getProduct($product_id)
    {
        $product=new product;

        $data=$product->find($product_id);

        return response()->json($data);
        
    }
}
