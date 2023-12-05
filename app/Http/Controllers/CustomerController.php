<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    public function store(Request $request){
         $data=$request->all();
     
         try {
            customer::create($data);
            return response()->json(['message' => 'Data inserted successfully']);
        } catch (Exception $e) {
            // Log the error
            Log::error($e);
            return response()->json(['error' => 'Failed to insert data'], 500);
        }

      }
}
