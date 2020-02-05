<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
use App\NewsCategory;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showNews()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        $newsCategory = NewsCategory::all();
        return view('admin.news.index_news')->with([
            'news' => $news,
            'newsCategory' => $newsCategory
            ]);
    }

    //view single news
    public function singleNews($id)
    {
        $news = News::find($id);
        return view('admin.news.view_single_news')->with('news', $news);
    }

    //show post news form

    public function createNewsForm()
    {
        $newsCategory = NewsCategory::all();
        return view('admin.news.create_news_form')->with('newsCategory', $newsCategory);
    }

    //get the data from the form and save into the database
    public function createNews(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);

        $news = new News;

        
        $news->category_id = $request->category;
        $news->title = $request->title;
        $news->body = $request->body;
        $news->save();

        if($request->hasFile('image_feature'))
        {
            $image_feature = $request->image_feature;
            $image_feature_new_name = time().$image_feature->getClientOriginalName();
            $image_feature->move('uploads/image_feature', $image_feature_new_name);
            $news->image_feature = 'uploads/image_feature/'.$image_feature_new_name;
            $news->save();
        }


        Session::flash('success', 'you have successfully create a news');
        return redirect('/admin/news');
    }

    //edit news form
    public function editNews($id)
    {
        $news = News::find($id);
        $newsCategory = NewsCategory::all();
        return view('admin.news.edit_news_form')->with([
            'news'=> $news,
            'newsCategory'=> $newsCategory,           
            ]);
    }
    //update a news function
    public function updateNews(Request $request, $id)
    {
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
        ]);

        $news = News::find($id);
        if($request->hasFile('image_feature'))
        {
            $image_feature = $request->image_feature;
            $image_feature_new_name = time().$image_feature->getClientOriginalName();
            $image_feature->move('uploads/image_feature', $image_feature_new_name);
            $news->image_feature = 'uploads/image_feature/'.$image_feature_new_name;
            $news->save();
        }
        $news->category_id = $request->category;
        $news->title = $request->title;
        $news->body = $request->body;
        $news->save();

        Session::flash('success', 'you have successfully update a news');
        return redirect('/admin/news');
    }

    //delete news
    public function deleteNews($id)
    {
        News::find($id)->delete();
        Session::flash('success', 'you have successfully delete a news');
        return redirect('/admin/news');
    }
}
