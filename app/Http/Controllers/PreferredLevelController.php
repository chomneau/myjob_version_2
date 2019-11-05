<?php

namespace App\Http\Controllers;

use App\Level;
use Illuminate\Http\Request;
use Session;
use auth;

class PreferredLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $preferredLevel = Level::all();
        //return $preferredLevel;
        return view('admin.preferred_level.index')->with('preferredLevel', $preferredLevel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required'
        ]);

        $preferredLevel= new Level();
        $preferredLevel->name = $request->name;
        $preferredLevel->admin_id = auth()->user()->id;
        $preferredLevel->save();

        Session::flash('success', 'You have successfully added new preferred level!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preferredLevel = Level::find($id);
        return view('admin.preferred_level.editLevel')
            ->with('preferredLevel', $preferredLevel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required'
        ]);

        $preferredLevel= Level::find($id);
        $preferredLevel->name = $request->name;
        $preferredLevel->admin_id = auth::user()->id;
        $preferredLevel->save();

        Session::flash('success', 'You have successfully update a preferred level!');
        return redirect('admin/preferredLevel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Level::find($id)->delete();
        Session::flash('success', 'You have deleted a preferred level successfully!');
        return redirect('admin/preferredLevel');
    }
}
