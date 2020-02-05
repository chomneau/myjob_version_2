<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;

class EmployerLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:employer', ['except'=>['logout']]);
    }

    public function showLoginForm()
    {
        return view('employer.employer-login');
    }
    public function employerLogin(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt to login the user in
        if(Auth::guard('employer')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            //if successful, then redirect to their intended location
            return redirect()->intended(route('employer.dashboard'));
        }
        //if unsuccessful, then redirect back to the login with the form data
        Session::flash('message', 'These credentials do not match our records! Try again!');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(){
        Auth::guard('employer')->logout();
        return redirect('/employer');
    }

}
