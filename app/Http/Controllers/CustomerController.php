<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class CustomerController extends Controller
{
    public function store(Request $request):Response{
    
        // $validatedData = $request->validate([
        //     'name' => 'required|string',
        //     'city' => 'required|string',
        //     'subcity'=>'required|string',
        // ]);
        
         $data=$request->all();
        //  $data=[
        //         'name'=>'Asmaamw',
        //         'city'=>'Addis Ababa',
        //         'subcity'=>'motta'];
        //         customer::create($data);
         try {
            customer::create($data);
            return response()->json(['message' => 'Data inserted successfully']);
        } catch (\Exception $e) {
            // Log the error
            \Log::error($e);
            return response()->json(['error' => 'Failed to insert data'], 500);
        }

      }
}
