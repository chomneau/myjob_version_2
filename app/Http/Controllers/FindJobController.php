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
use Session;
use App\About;
use App\TermCondition;
use App\News;
use App\NewsCategory;

class FindJobController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {

        $this->countCategory = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(7)->get();



        View::share('countCategory', $this->countCategory);

        $this->company = Company::with('job')->get();
        View::share('company', $this->company);

        $this->location = Location::all();
        View::share('location', $this->location);

        $this->industryType = IndustryType::orderBy('name', 'asc')->get();
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

        //news
        $this->news = News::all()->take(3);
        View::share('news', $this->news);

        //newsCategory
        $this->newsCategory = NewsCategory::all();
        View::share('newsCategory', $this->newsCategory);
    }
    
    public function alpha()
    {
        //$job = Job::with('company')->paginate(5);
        $job = Job::with('company')->orderBy(\DB::raw('RAND(12)'))->where('status',1)->paginate(20);
        $location = Location::withCount('job')->take(7)->get();
        // $category = Category::withCount(['job'=>function($query){
            // $query->where('status',1);
        // }])->take(7)->get();

      // $category = Category::whereHas('job', function ($query){
      //  $query->where('status', 1)->count();
       // })->take(7)->get();


        $industryType = IndustryType::withCount('company')->take(7)->get();


        return view('pages.findjob')->with([
            'job'=>$job,
            'locationCount'=> $location,
            'countCategory'=>$category,
            'countIndustry'=>$industryType,
        ]);
    }



    public function index()
    {

        //$job = Job::with('company')->paginate(5);
        $job = Job::with('company')->orderBy(\DB::raw('RAND(12)'))->where('status',1)->paginate(10);
        $location = Location::withCount('job')->take(7)->get();
        $category = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(7)->get();

        //count open job in company
        $companyCountJob = Company::withCount(['job'=>function($query){
            $query->where('status',1);}])->take(100)->get();

      // $category = Category::whereHas('job', function ($query){
      //  $query->where('status', 1)->count();
       // })->take(7)->get();


        $industryType = IndustryType::withCount('company')->take(7)->get();

        return view('frontend.index')->with([
            'job'=>$job,
            'locationCount'=> $location,
            'countCategory'=>$category,
            'countIndustry'=>$industryType,
            'companyCountJob'=>$companyCountJob,
        ]);
    }

    //about paysjob page
    public function about()
    {
        $about = About::all();
        return view('frontend.about.about-paysjob')->with('about', $about);
    }

    //term and condition
    public function termCondition()
    {
        $terms = TermCondition::all();
        return view('frontend.about.term-condition')->with('terms', $terms);
    }

    //list all job 
    public function listAlljob()
    {

        //$job = Job::with('company')->paginate(5);
        $job = Job::with('company')->orderBy(\DB::raw('RAND(12)'))->where('status',1)->paginate(10);
        // $location = Location::withCount('job')->get();
        $category = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(30)->get();

        //count open job in company
        $companyCountJob = Company::withCount(['job'=>function($query){
            $query->where('status',1);}])->take(7)->get();

        return view('frontend.job-section.main-job-list')->with([
            'job'=>$job,
            'countCategory'=>$category,
            'companyCountJob'=>$companyCountJob,
        ]);
        
    }

       //list all job Grid
       public function gridJob()
       {
   
           //$job = Job::with('company')->paginate(5);
           $job = Job::with('company')->orderBy(\DB::raw('RAND(15)'))->where('status',1)->paginate(30);
           // $location = Location::withCount('job')->get();
           $category = Category::withCount(['job'=>function($query){
               $query->where('status',1);
           }])->take(30)->get();
   
           //count open job in company
           $companyCountJob = Company::withCount(['job'=>function($query){
               $query->where('status',1);}])->take(7)->get();
   
           return view('frontend.job-section.job-grid')->with([
               'job'=>$job,
               'countCategory'=>$category,
               'companyCountJob'=>$companyCountJob,
           ]);
           
       }


   


//Search job
    public function search(){
        $job = Job::where('jobTitle','like', '%'. request('query') .  '%')->where('status',1)->paginate(10);

        return view('search.result')->with('job', $job)
            ->with('jobTitle', 'Search results :' .request('query'));
          
    }


    public function jobByCategory($id)
    {
        $catLabel = Category::find($id);

        $jobByCategory = Job::with('company')
            ->where('category_id', $id)->where('status',1)->paginate(11);

        return view('frontend.job-section.main-job-by-category')->with([
            'jobByCategory'=>$jobByCategory, 
            'catLabel'=>$catLabel
            ]);
    }

//job by location
    public function jobByLocation($id)
    {
        $jobLocation = Location::find($id);
        $location = Location::withCount('job')->take(30)->get();
        $category = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(30)->get();

        //count open job in company
        $companyCountJob = Company::withCount(['job'=>function($query){
            $query->where('status',1);}])->take(7)->get();

        $industryType = IndustryType::withCount('company')->take(7)->get();

        return view('frontend.job-section.main-job-by-location')->with([

            'jobLocation'=>$jobLocation,
            'locationCount'=> $location,
            'countCategory'=>$category,
            'countIndustry'=>$industryType,
            'companyCountJob'=>$companyCountJob,
            ]);
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

    //list all company by industry 
    public function listIndustry($id)
    {
        $industry = IndustryType::find($id);
        return view('frontend.job-section.main-company-by-industry')
        ->with([
            'industry' => $industry
        ]);
    }

    //list all industry

    public function allIndustry()
    {
        $industryType = IndustryType::all();
        return view('frontend.job-section.all-industry')->with('industryType', $industryType);
    }

    //Job by company
    public function jobByIndustry($id)
    {
        $company = Company::find($id)->job->where('status', 1);
        $location = Location::withCount('job')->take(30)->get();
        $category = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(30)->get();
        $industryType = IndustryType::withCount('company')->take(7)->get();

        
        //return $jobByIndustry;
        return view('frontend.job-section.main-job-by-company')->with([
            'jobByCompany'=> $company, 
            'locationCount'=> $location,
            'countCategory'=>$category,
            'countIndustry'=>$industryType,
            ]);
    }


//find job by all location
    public function allLocation(){
        $allLocation = Location::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(7)->get();
        return view('pages.all-location')->with('allLocation', $allLocation);
    }

    //find Job by industry

    public function allCompany(){
        
        $company = Company::withCount(['job'=>function($query){
            $query->where('status',1);}])->paginate(20);
           
        $location = Location::withCount('job')->take(30)->get();
        $category = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(30)->get();
          

       // return $company;
        return view('frontend.job-section.main-job-by-company')
        ->with([
            'companies' => $company,
            'locationCount'=> $location,
            'countCategory'=>$category,
          
        ]);
    }

//company profile

    public function companyProfile($id)
    {
        $company = Company::find($id);

        return view('frontend.job-section.company-profile')->with([
            'company'=>$company,
        ]);
    }


    //Find job by Category

    public function allCategory(){
        $allCategory = Category::withCount(['job'=>function($query){
            $query->where('status',1);
        }])->take(7)->get();
        return view('pages.all-category')->with('allCategory', $allCategory);
    }




    public function show($id, $company_id)
    {
        //count viewer when they click on single job post and refresh not count
        $count_view = Job::find($id);
        
        if(!in_array($id, session('visited_job', []))){
            session()->push('visited_job', $id);
            $count_view->count_view +=1;
            $count_view->save();
            
        }


        $singleJob = Job::find($id);
        $company = Company::find($company_id);
        $similarJobs = Job::with('company')
            ->whereHas('category', function ($query) use($singleJob) {
                $query->where('id', $singleJob->category->id);
            })->take(5)
            ->get();
        return view('frontend.job-section.single-job')->with([
            'singleJob'=> $singleJob,
            'company'=> $company,
            'similarJob' => $similarJobs,
        ]);
    }

    //blog or news section

    public function singleNews($id)
    {
        $news = News::orderBy('created_at', 'desc')->take(5)->get();
        $category = NewsCategory::all();
        $single_news = News::find($id);
        return view('frontend.news.single_news')
        ->with('single_news', $single_news)
        ->with('news', $news)
        ->with('category', $category);
    }

    //list news page

    public function newsList()
    {
        $news = News::all();
        $category = NewsCategory::all();
        return view('frontend.news.news_list')->with('news', $news)
        ->with('category', $category);
    }

    //news by category
    public function newsCategory($id)
    {
        $news = News::where('category_id', $id)->get();
        $category = NewsCategory::all();
        return view('frontend.news.newsCategory')->with('news', $news)->with('category', $category);
    }


}
