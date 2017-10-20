<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function upload()
    {
        return view('upload');
    }

    public function uploadPicture(Request $request)
    {
        if(Input::hasFile('file'))
        {
            $this->validate($request, [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
            echo 'Image uploaded succesfully';
            $file = Input::file('file');
            $file->move(('uploads'), $file->getClientOriginalName());
            echo '<img src="uploads/"' . $file->getClientOriginalName();
        }
    }

    /**
     * Manage Post Request
     *
     * @return void
     */
    public function imageUploadPost(Request $request)
    {
        $

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'), $imageName);

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }
}
