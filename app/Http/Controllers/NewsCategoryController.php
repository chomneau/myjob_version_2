<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsCategory;
use Session;

class NewsCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $category = NewsCategory::orderBy('created_at', 'desc')->get();
        return view('admin.news.news_category.news_category_show')->with('category', $category);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category'=>'required'
        ]);

        $category = new NewsCategory();
        $category->name = $request->category;
        $category->user_id = auth()->user()->id;
        $category->save();

        Session::flash('success', 'You successfully added new category!');
        return redirect()->back();
    }
    public function edit($id)
    {

        $editCategory = NewsCategory::find($id);
        return view('admin.news.news_category.edit_news_category')
            ->with('editCategory', $editCategory);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = NewsCategory::find($id);
        $category->name = $request->name;
        $category->user_id = auth()->user()->id;
        $category->save();
        Session::flash('success', 'You successfully updated a category!');
        return redirect('admin/news/category/show');
    }

    public function destroy($id)
    {
        $category = NewsCategory::find($id);
        $category->delete();
        Session::flash('success', 'You successfully Deleted a category!');
        return redirect()->back();
    }
}
