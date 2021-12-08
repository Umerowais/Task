<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function form()
    {
        return view('admin.pages.form');
    }
    
    public function page()
    {
        return view('admin.pages.home');
    }
    public function distroy(Request $req){
        Auth::logout();
        return redirect('/Addinfo');
    }
    
}
