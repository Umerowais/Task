<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

  

class AuthController extends Controller
{
    public function signup(Request $req){
     

        $new = new User();
        $new->name= $req->name;
        $new->email = $req->email;
        $new->password = Hash::make($req->password);
    
        $new->save();
       
        return redirect()->back()->with('success', 'Record Create Successfully ');
      // return redirect('/table')->with('success','Item created successfully!');
    }
    public function login(Request $request)
  {
      $credentials = $request->only('email', 'password');

      if (Auth::attempt($credentials)) {
          // Authentication passed...
          return redirect('/admin/Message');
      }else{
          return redirect('/')->with('error','Data not match');
      }
    
   
}
}