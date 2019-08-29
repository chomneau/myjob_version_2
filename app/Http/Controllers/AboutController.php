<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\About;
use Session;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $about = About::all()->first();
       // return $about;
        return view('admin.about.index')->with('about', $about);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $about = About::find($id);       
        $about->title = $request->title;
        $about->body = $request->body;
        $about->save();

        Session::flash('success','Record inserted successfully');
        return redirect('/admin/about');
    }
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.index')->with('about',$about);
    }
}
