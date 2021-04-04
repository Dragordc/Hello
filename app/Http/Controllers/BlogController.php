<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\UploadFile;


class BlogController extends Controller
{
    //
    public function index()
    {
        //
        $posts = Post::all();
        return view('index')->with(['posts'=>$posts]);
        
    }
     public function store(Request $request)
    {
        //
       $user = new Post();
        $user->Name = $request->input('Name');
        $user->Surname = $request->input('Surname');
        $user->Email = $request->input('Email');
        if($request->hasFile('Photo')){
            $file = $request->file('Photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.  $extension;
            $file->move('uploads' , $filename);
            $user->Photo = $filename;
        }else{
            return 0;
        }
        $user->save();
        return 'You have successfully submitted:)';
           

    }
}
