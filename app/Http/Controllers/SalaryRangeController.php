<?php

namespace App\Http\Controllers;

use App\SalaryRange;
use Illuminate\Http\Request;
use Session;

class SalaryRangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $salaryRange = SalaryRange::all();
        return view('admin.salary_range.index')->with('salaryRange', $salaryRange);
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
            'name' => 'required'
        ]);
        $salaryRange = new SalaryRange;
        $salaryRange->name = $request->name;
        $salaryRange->admin_id = auth()->user()->id;
        $salaryRange->save();
        Session::flash('success', 'Salary Range is created successfully');
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
        $salaryRange = SalaryRange::find($id);
        return view('admin.salary_range.editSalaryRange')->with('salaryRange', $salaryRange);
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
        $salaryRange = SalaryRange::find($id);
        $salaryRange->name = $request->name;
        $salaryRange->admin_id = auth()->user()->id;
        $salaryRange->save();
        Session::flash('success', 'Salary Range is updated successfully!');
        return redirect('admin/salaryRange');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salaryRange = SalaryRange::find($id);
        $salaryRange->delete();
        Session::flash('success', 'Salary Range is deleted successfully!');
        return redirect('admin/salaryRange');
    }
}
