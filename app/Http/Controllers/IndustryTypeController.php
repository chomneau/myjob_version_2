<?php

namespace App\Http\Controllers;

use App\IndustryType;
use Illuminate\Http\Request;
use Session;
use auth;

class IndustryTypeController extends Controller
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
        $industry = IndustryType::orderBy('created_at', 'desc')->get();
        return view('admin.industry.index')->with('industry', $industry);
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
            'industryType' => 'required'
        ]);
        $industry = new IndustryType();
        $industry->name = $request->industryType;
        $industry->admin_id = auth()->user()->id;
        $industry->save();

        Session::flash('success', 'You successfully added new industry type');
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
        $industry = IndustryType::find($id);
        return view('admin.industry.editIndustry')->with('industry', $industry);
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
            'name' => 'required'
        ]);

        $industry = IndustryType::find($id);
        $industry->name = $request->name;
        $industry->admin_id = auth::user()->id;
        $industry->save();
        Session::flash('success', 'You successfully updated a industry!');
        return redirect('admin/industry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industry = IndustryType::find($id);
        $industry->delete();

        Session::flash('success', 'You successfully deleted industry type');
        return redirect()->back();
    }
}
