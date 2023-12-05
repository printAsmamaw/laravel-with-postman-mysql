<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{

   public function store(Request $request){
    
        $data=$request->all();
        try{
          product::create($data);

          return response()->json(['message'=>"Product inserted successfully"]);
          
        }
        catch(Exception $e){
          Log::error($e);
          return response()->json(['error'=>"Failed to add the data"]);
          
        }
    }
}
