<?php

namespace App\Http\Controllers;
use App\Models\assig;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class adminController extends Controller
{
    function index(){
        $data['assignment'] = assig::orderby('id', 'desc')->paginate(5);
        return view('admin.index',$data);
    }

    function create(){

        return view('admin.create');
    }

    function store(Request $request){
        $request->validate([
            'username' => 'required',
            'post' => 'required'
        ]);

        $dataassig = new assig;
        $dataassig->username = $request->username;
        $dataassig->post = $request->post;
        $dataassig->save();
        return redirect()->route('admin.index')->with('success','Post created successfully.');
    }


    function Destroy(){
        
        return view('admin.Destroy');
    }

    //
}
