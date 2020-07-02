<?php

namespace App\Http\Controllers;

use App\Admin;
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
use Illuminate\Http\Request;
use Session;
use Auth;
use View;
use App\Employer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::with('job')->orderBy('created_at', 'desc')
            ->paginate(15);

         

       // return $job_count_by_company[1];
       return view('admin.company.view-all-company')->with([
           'company'=>$company,
          // 'job_count_by_company'=>$job_count_by_company,
       ]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create-company');
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
            //validate for company table
            'companyName' => 'required',
            'contactPerson' => 'required',
            'employeeSize' => 'required',
            'companyType' => 'required',
            'industryType' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
            'website' => 'required|url',
            'address' => 'required'
        ]);

        // $employer = new Employer();
        // $employer->name = $request->companyName;
        // $employer->email = $request->email;
        // $employer->password = bcrypt('Paysjob.com');
        // $employer->save();
            

        //$user = Auth::user();
        $company = new Company();
        //upload image for user

       // $company->user_id = $employer->id;
        $company->companyName = $request->companyName;
        $company->contactPerson = $request->contactPerson;
        $company->employeeSize_id = $request->employeeSize;
        $company->companyType_id = $request->companyType;
        $company->industry_type_id = $request->industryType;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->location_id = $request->location;
        $company->website = $request->website;
        $company->address = $request->address;
        $company->about = $request->about;
        
        $company->save();

        if($request->hasFile('logo'))
        {
            $logo = $request->logo;
            $logo_new_name = time().$logo->getClientOriginalName();
            $logo->move('uploads/logos', $logo_new_name);
            $company->logo = 'uploads/logos/'.$logo_new_name;
            $company->save();
        }

        Session::flash('success', 'You successfully updated your profile');
        return redirect('admin/company');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::find($id);
        $activeJob = Company::find($id)->job->where('status', 1)->count();
        $expiredJob = Company::find($id)->job->where('status', 0)->count();
        
        return view('admin.company.company-profile')
            ->with([
                'company'=>$company,
                'note'=>$company->note,
                'jobPost'=>$company->job,
                'activeJob'=>$activeJob,
                'expiredJob'=>$expiredJob,

            ]);
     //  return view('admin.company.company-profile')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
        return view('admin.company.edit-company')->with('company', $company);
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
            //validate for company table
            'companyName' => 'required',
            'contactPerson' => 'required',
            'employeeSize' => 'required',
            'companyType' => 'required',
            'industryType' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'location' => 'required',
            //'website' => 'required|url',
            'address' => 'required'
        ]);

        //$user = Auth::user();
        $company = Company::find($id);
        //upload image for user

        $company->companyName = $request->companyName;
        $company->contactPerson = $request->contactPerson;
        $company->employeeSize_id = $request->employeeSize;
        $company->companyType_id = $request->companyType;
        $company->industry_type_id = $request->industryType;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->location_id = $request->location;
        $company->website = $request->website;
        $company->facebook_url = $request->facebook_url;
        $company->twitter_url = $request->twitter_url;
        $company->linkedin_url = $request->linkedin_url;
        $company->location_map = $request->location_map;
        $company->address = $request->address;
        $company->about = $request->about;
        $company->save();

        // $employer = Employer::find($company->user_id);
        // $employer->name = $request->companyName;
        // $employer->email = $request->email;
        // $employer->save();

        if($request->hasFile('logo'))
        {
            $logo = $request->logo;
            $logo_new_name = time().$logo->getClientOriginalName();
            $logo->move('uploads/logos', $logo_new_name);
            $company->logo = 'uploads/logos/'.$logo_new_name;
            $company->save();
        }

        Session::flash('success', 'You successfully updated your profile');
        return redirect()->route('admin.company.profile', ['id'=>$company->id]);
    }


    //delete company
    public function destroy($id)
    {
        $com = Company::find($id);
        $com->delete();
        Session::flash('success', 'You successfully delete company');
        return redirect()->back();
    }


    //Search job
    public function companySearch(){
        $company = Company::where('companyName','like', '%'. request('query') .  '%')->paginate(10);

        
        return view('admin.company.search.company_search_result')->with('company', $company)
            ->with('companyName', 'Search results :' .request('query'));
          
    }



    //update company password
    public function companyUpdatePassword( Request $request, $company_id)
    {

        $this->validate($request, [
            'password' => 'required|string|min:6|confirmed',
        ]);

        $com = Company::find($company_id);
        $employer_id = $com->user_id;


        $employer = Employer::find($employer_id);

       // return $employer;

        if (Input::get('password') == Input::get('password_confirmation')) {
            
            $employer->password = bcrypt(Input::get('password'));
            
            $employer->save();

            Session::flash('success', 'Password changed successfully!');

            return redirect()->route('admin.company.profile', ['id' => $com->id]);

        } else {
            Session::flash('error', 'password is not match! Try Again');
            return redirect()->back();
        }
     }



}
