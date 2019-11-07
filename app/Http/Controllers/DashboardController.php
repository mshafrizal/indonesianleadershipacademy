<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('pages.admin.dashboard');
        }
        else
            return redirect()->route('login');
    }
}
