<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\About;
use App\TermCondition;
use Session;
use App\Contact;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $about = About::all();
       // return $about;
        return view('admin.about.index')->with('about', $about);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $about = new About;
        $about->title = $request->title;
        $about->body = $request->body;
        $about->save();

        Session::flash('success','Record inserted successfully');
        return redirect('/admin/about');
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
        return view('admin.about.edit')->with('about',$about);
    }

    public function delete($id)
    {
        About::find($id)->delete();
        $about = About::all();
        Session::flash('success','Record delete successfully');
        return view('admin.about.index')->with('about',$about);
    }

    //term and condition
    public function termCondition()
    {
        $terms = TermCondition::all();
       // return $about;
        return view('admin.about.index-term-condition')->with('terms', $terms);
    }

    public function storeTermCondition(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $terms = new TermCondition;
        $terms->title = $request->title;
        $terms->body = $request->body;
        $terms->save();

        Session::flash('success','Record inserted successfully');
        return redirect(route('admin.termCondition'));
    }

    public function termConditionUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $terms = TermCondition::find($id);       
        $terms->title = $request->title;
        $terms->body = $request->body;
        $terms->save();

        Session::flash('success','Record inserted successfully');
        return redirect(route('admin.termCondition'));
    }
    public function termConditionEdit($id)
    {
        $terms = TermCondition::find($id);
        return view('admin.about.term-condition-edit')->with('terms',$terms);
    }

    public function termConditionDelete($id)
    {
        TermCondition::find($id)->delete();
        $terms = TermCondition::all();
        Session::flash('success','Record delete successfully');
        return redirect(route('admin.termCondition'))->with('terms', $terms);
    }

    //contact
    public function contact()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        
        return view('admin.about.index-contact')->with('contacts', $contacts);
    }

    public function contactDetail($id)
    {
       $contactDetail = Contact::find($id);
       $contacts = Contact::orderBy('created_at', 'desc')->get();
       return view('admin.about.contact-detail')->with([
           'contacts'=>$contacts,
           'contactDetail'=>$contactDetail
           
           ]);
    }

    //delete contact
    public function contactDelete($id)
    {
        Contact::find($id)->delete();

       $contacts = Contact::orderBy('created_at', 'desc')->get();

       return redirect(route('admin.contact'))->with('contacts', $contacts);
        
    }

}
