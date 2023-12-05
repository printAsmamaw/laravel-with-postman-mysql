<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
class fileController extends Controller
{
    public function fileAcess(Request $request){
            //  $request->validate([
            //     'email'=>'required'|'string'|'email',
            //     'password'=>'required'|'string',
            //  ]);
            //  $credintials= $request->only('email','password');
        
            
    // 1. first register the user on users table on default laravel table
            //  $data=$request->all();
            //  $user=new User;
            //  $user->create($data);
            //  //or use
            // //  User::create($data);
            //  return response()->json($data, 200);
            


    //2. then authenticate by using the Auth::attembet() method        
             
             //you dont use all that is name,email,password
             $data=$request->all();
             // instead use the email,password for authentication purpose
             $data=$request->only('email','password');
             $validator= Validator::make($data, [
                'email'=>'required|email',
                'password'=>'required',
             ]);

             if($validator->fails())
             {
                return redirect()->back()->withErrors($validator)->withInput();
             }

       
        if(Auth::attempt($data))
        {
            return redirect('/');
        }

        return response()->json(['message'=>'The user is not permitted to access the file of laravel documentation']);

    
        // return redirect()->back()->withErrors(['email'=>'Invalid credintials'])->withInput();
    
    
    }
}
