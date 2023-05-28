<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user() && auth()->user()->type == 'client'){
            return redirect('index');
        }
        if(auth()->user() && auth()->user()->type == 'admin'){
            return redirect('dashboard');
        }
        return redirect('index');
    }
}
