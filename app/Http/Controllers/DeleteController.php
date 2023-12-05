<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class DeleteController extends Controller
{
    public function delete($product_id)
    {
    
               $product=product::find($product_id);
               $product->delete();
    }
}
