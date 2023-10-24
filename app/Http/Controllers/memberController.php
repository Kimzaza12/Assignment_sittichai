<?php

namespace App\Http\Controllers;

use App\Models\assig;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function register(){

    }
}
