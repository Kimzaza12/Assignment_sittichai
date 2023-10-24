<?php

namespace App\Http\Controllers;

use App\Models\assig;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class adminController extends Controller
{
    public function index()
    {
        $data['assignment'] = assig::orderby('id', 'desc')->paginate(5);
        return view('admin.index', $data);
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'post' => 'required'
        ]);

        $dataassig = new assig;
        $dataassig->username = $request->username;
        $dataassig->post = $request->post;
        $dataassig->save();
        return redirect()->route('index')->with('success', 'Post created successfully.');
    }


    public function edit($id)
    {
        $assig2 = assig::find($id);
        return view('admin.edit', compact('assig2'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'post' => 'required'
        ]);

        $assig2 = assig::find($id);
        $assig2->username = $request->username;
        $assig2->post = $request->post;
        $assig2->save();
        return redirect()->route('index')->with('success', 'Post Edit successfully.');
    }



    public function user()
    {
        $data['assignmentuser'] = assig::orderby('id', 'desc')->paginate(6);
        return view('user', $data);
    }


    public function login()
    {
        return view('admin.login');
    }

    public function adminlogin(Request $request)
    {

        $input = $request->all();
        
        return redirect()->route('login');

        if ($input == 0) {
            return redirect()->route('index');
        }
     
    }

    public function delete(Request $request, $id){
        
        $itemId = $request->route('id');

        assig::find($itemId)->delete();

        return redirect()->route('index')->with('success', 'Post Delete successfully.');

    }

}
