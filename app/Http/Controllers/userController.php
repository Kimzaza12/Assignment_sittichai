<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function index(){
        $list ="สิทธิชัย";
        return view('user',compact('list'));
    }
}
