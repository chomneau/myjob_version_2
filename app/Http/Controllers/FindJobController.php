<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\Location;
use View;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

use App\Category;

use App\CompanyType;
use App\ContractType;
use App\Degree;
use App\EmployeeNumber;
use App\IndustryType;
use App\Level;
use App\PreferredExperience;
use App\SalaryRange;

class FindJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->locationCount = Location::withCount('job')->orderBy('updated_at', 'Asc')->take(7)->get();
        View::share('locationCount', $this->locationCount);



        $this->countCategory = Category::withCount('job')->take(7)->get();
        View::share('countCategory', $this->countCategory);

        $this->industryType = IndustryType::withCount('company')->take(7)->get();
        View::share('industryType', $this->industryType);


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

    //testing
    public function testform(){
        return view('test');
    }

    public function storedata(Request $request){
        $this->validate($request, [
            'textarea' => 'required'
        ]);
        return 1234;

    }







    public function index()
    {

        //$job = Job::with('company')->paginate(5);
        $job = Job::with('company')->orderBy('created_at', 'Desc')->paginate(11);
        $location = Location::withCount('job')->take(7)->get();
        $category = Category::withCount('job')->take(7)->get();
        $industryType = IndustryType::withCount('company')->take(7)->get();
        return view('pages.findjob')->with([
            'job'=>$job,
            'locationCount'=> $location,
            'countCategory'=>$category,
            'countIndustry'=>$industryType,
        ]);
    }
//Search job
    public function search(){
        $job = Job::where('jobTitle','like', '%'. request('query') .  '%')->paginate(10);

        return view('search.result')->with('job', $job)
            ->with('jobTitle', 'Search results :' .request('query'));
          
    }






    public function jobByCategory($id)
    {
        $catLabel = Category::find($id);

        $jobByCategory = Job::with('company')
            ->where('category_id', $id)->orderBy('created_at', 'Desc')->paginate(11);
        return view('pages.jobByCategory')->with(['jobByCategory'=> $jobByCategory, 'catLabel'=>$catLabel]);
    }

//job by location
    public function jobByLocation($id)
    {
        $jobLocation = Location::find($id);

        $jobByLocation = Job::with('company')
            ->where('location_id', $id)->orderBy('created_at', 'Desc')->paginate(11);
        return view('pages.jobByLocation')->with(['jobByLocation'=> $jobByLocation, 'jobLocation'=>$jobLocation]);
    }
//Job by industry function
    public function jobByAllIndustry($id)
    {
        //$jobIndustry = IndustryType::find($id);

        $jobByIndustry = Company::with('industryType')
            ->where('industry_type_id', $id)->orderBy('created_at', 'Desc')->get();
        return $jobByIndustry;
       // return view('pages.jobByIndustry')->with(['jobByIndustry'=> $jobByIndustry, 'jobIndustry'=>$jobIndustry]);
    }

    public function jobByIndustry($id)
    {
        $jobIndustry = IndustryType::find($id);

        $jobByIndustry = Job::whereHas('company', function ($query) use($id){
            $query->where('industry_type_id', $id);
        })->orderBy('created_at', 'Desc')->paginate(11);

        //return $jobByIndustry;
        return view('pages.jobByIndustry')->with(['jobByIndustry'=> $jobByIndustry, 'jobIndustry'=>$jobIndustry]);
    }


//find job by all location
    public function allLocation(){
        $allLocation = $location = Location::withCount('job')->get();
        return view('pages.all-location')->with('allLocation', $allLocation);
    }

    //find Job by industry

    public function allIndustry(){
        $industryType = IndustryType::withCount('company')->get();
        return view('pages.all-industry')->with('industryType', $industryType);
    }

    //Find job by Category

    public function allCategory(){
        $allCategory = Category::withCount('job')->get();
        return view('pages.all-category')->with('allCategory', $allCategory);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $company_id)
    {
        $singleJob = Job::find($id);
        $company = Company::find($company_id);
        $similarJobs = Job::with('company')
            ->whereHas('category', function ($query) use($singleJob) {
                $query->where('id', $singleJob->category->id);
            })->take(20)
            ->get();
        return view('pages.single-job')->with([
            'singleJob'=> $singleJob,
            'company'=> $company,
            'similarJob' => $similarJobs,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
