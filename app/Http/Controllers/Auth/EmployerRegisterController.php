<?php

namespace App\Http\Controllers\Auth;


use App\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;


use App\Category;

use App\CompanyType;
use App\Company;
use App\ContractType;
use App\Degree;
use App\EmployeeNumber;
use App\IndustryType;
use App\Job;
use App\Level;
use App\Location;
use App\Note;
use App\PreferredExperience;
use App\SalaryRange;

use Session;
use Auth;
use View;



class EmployerRegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/employer';

    public function __construct()
    {
        $this->middleware('guest');

        $this->category = Category::all();
        View::share('category', $this->category);

        $this->industryType = IndustryType::all();
        View::share('industryType', $this->industryType);

        $this->location = Location::all();
        View::share('location', $this->location);

        $this->companyType = companyType::all();
        View::share('companyType', $this->companyType);

        $this->employeeSize = EmployeeNumber::all();
        View::share('employeeSize', $this->employeeSize);

        $this->contractType = ContractType::all();
        View::share('contractType', $this->contractType);

        $this->salaryRange = SalaryRange::orderBy('name', 'Asc')->get();
        View::share('salaryRange', $this->salaryRange);

        $this->level = Level::all();
        View::share('level', $this->level);

        $this->degree = Degree::all();
        View::share('degree', $this->degree);

        $this->preExperience = PreferredExperience::all();
        View::share('preExperience', $this->preExperience);



    }



    public function showEmployerRegisterForm()
    {
        return view('employer.employer-register');

    }


//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
//    }

//    protected function employerRegister(array $data)
//    {
//        $employer = Employer::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
////        Profile::create([
////            'user_id' => $user->id,
////        ]);
//
////        Experience::create([
////            'user_id' => $user->id,
////        ]);
//        return $employer;
//
//    }

    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            
            'contactPerson' => 'required',
            'phone' => 'required',
            'address' => 'required',

           

        ]);


    }

    public function employerRegister(Request $request){
        $this->validation($request);
        $employer = Employer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        Company::create([

            'user_id' => $employer->id,
            'companyName'=>$employer->name,
            'email'=>$employer->email,
            'logo'=>'/logos/logo.png',
            'contactPerson'=>$request->contactPerson,
            'phone'=>$request->phone,
            'contractType'=>$request->companyType,
            'address'=>$request->address,

        ]);

        // $company = Company::findOrFail($employer->id);



       // return $employer;
       // return redirect('/employer/complete/profile/$company->id')->with('company', $company);

        return redirect('/employer')->with('success', 'You have registered');
    }

    public function registerEmployer(){
        return view('employer.register_employer');
    }

    



}
