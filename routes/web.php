<?php
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


   
//condiction
Route::get('/condition', 'FindJobController@termCondition')->name('condition');

//about us
Route::get('/aboutPaysjob', 'FindJobController@about')->name('about.paysjob');

//contact
Route::get('/contact', 'FindJobController@contact')->name('contact');


//Auth::routes(['verify' => true]);

//store contact
Route::post('/contact/store', 'ContactController@storeContact')->name('contact.store');



// Route::get('/about', 'AboutController@index')->name('about');
// Route::post('/test', 'FindJobController@storedata')->name('storedata');


Route::get('/verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('/verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


//news section
//single news
Route::get('/news/single/{id}', 'findJobController@singleNews')->name('news.single');
//list news page
Route::get('/news/list', 'findJobController@newsList')->name('news.list');
//news by category
Route::get('/news/category/{id}', 'findJobController@newsCategory')->name('news.category');


Route::get('/welcome', 'FindJobController@index')->name('homepage');

//count job viwer by user
Route::get('/countViewer', 'FindJobController@countViewer')->name('countViewer');



//search route
Route::get('/result', 'FindJobController@search')->name('result');
//employer login
Route::get('/employer/login', 'Auth\EmployerLoginController@showLoginForm')->name('employer.login');
Route::post('/employer/login', 'Auth\EmployerLoginController@employerLogin')->name('employer.login.submit');
//employer register
Route::get('/employer/register', 'Auth\EmployerRegisterController@showEmployerRegisterForm')->name('employer.register');
Route::post('/employer/register', 'Auth\EmployerRegisterController@employerRegister')->name('employer.register.submit');


Route::get('/employer/{id}', 'EmployerController@index')->name('employer.profile');
Route::get('/employer', 'EmployerController@index')->name('employer.dashboard');


Route::get('/employer/complete/profile/{company_id}', 'Auth\EmployerRegisterController@registerEmployer')->name('registerEmployer');

//make job active or expired in employer profile
Route::get('/employer/makeJobActive/{job_id}', 'EmployerJobController@makeJobActive')->name('employer.makeJobActive');
Route::get('/employer/makeJobExpired/{job_id}', 'EmployerJobController@makeJobExpired')->name('employer.makeJobExpired');


Route::get('/employer/viewAllJobs', 'EmployerController@employeeAllJobs')->name('employer.viewAllJobs');
Route::get('/employer/edit/{id}', 'EmployerController@edit')->name('employer.edit');
Route::post('/employer/update/{id}', 'EmployerController@update')->name('employer.update');
//change password for employer
Route::get('/employer/changepassword/{id}', 'EmployerController@showPassForm')->name('employer.showPasswordForm');
Route::post('/employer/changepassword/{id}', 'EmployerController@updatePassword')->name('employer.changePassword');

//create job by employer
Route::get('employer/createjob/post/{id}', 'EmployerJobController@create')->name('employer.createjob.create');
Route::post('employer/createjob/{id}', 'EmployerJobController@store')->name('employer.createjob.postjob');
Route::get('employer/createjob/edit/{id}/{company_id}', 'EmployerJobController@edit')->name('employer.createjob.edit');
Route::post('employer/createjob/update/{id}/{company_id}', 'EmployerJobController@update')->name('employer.createjob.update');



//Route::get('/form', 'PagesController@form');
//Route::post('/form', 'PagesController@store');

Auth::routes();
// Route::get('/about', 'PagesController@getAbout');
// Route::get('/contact', 'PagesController@getContact');

Route::get('/postjob', 'PagesController@getPostjob');

//list all job
Route::get('/home/joblist', 'FindJobController@listAlljob')->name('home.joblist');

//list all job with grid view
Route::get('/home/jobGrid', 'FindJobController@gridJob')->name('home.jobGrid');

//findjob
Route::get('/findjob', 'FindJobController@index')->name('findjob');
Route::get('/singleJob/{id}/{company_id}', 'FindJobController@show')->name('singleJob');

Route::get('/jobByCategory/{id}', 'FindJobController@jobByCategory')->name('jobByCategory');
Route::get('/allCategory/{id}', 'FindJobController@allCategory')->name('allCategory');

//find by location
Route::get('/jobByLocation/{id}', 'FindJobController@jobByLocation')->name('jobByLocation');
Route::get('/allLocation', 'FindJobController@allLocation')->name('allLocation');

Route::get('/jobByIndustry/{id}', 'FindJobController@jobByIndustry')->name('jobByIndustry');
Route::get('/allcompany-NGO', 'FindJobController@allCompany')->name('allCompanyNGO');
//list all industry which group all company by industry
Route::get('/listIndustry/{id}', 'FindJobController@listIndustry')->name('list-industry');

//all industry
Route::get('/allIndustry', 'FindJobController@allIndustry')->name('allIndustry');



//company profile in frontend 
Route::get('/company-profile/{id}', 'FindJobController@companyProfile')->name('companyProfile');

//Route::get('/home', 'HomeController@index');
//Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
//Route::post('/home/profile', 'HomeController@createProfile')->name('home.profile.submit');

Route::get('/home', 'HomeController@index')->name('home.profile');




Route::get('/home/job', 'HomeController@showJobForm')->name('home.jobform');
Route::post('/home/job', 'HomeController@createjob')->name('home.jobform.submit');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//user route controller
Route::get('/user/profile', 'ProfileController@index')->name('user.profile');
Route::post('/user/profile/update', 'ProfileController@update')->name('user.profile.update');
//upload CV
Route::get('/user/uploadcv', 'UploadCvController@uploadCv')->name('user.uploadcv');
Route::post('/user/uploadcvFunction', 'UploadCvController@uploadCvFunction')->name('user.uploadcvFunction');
Route::get('/user/uploadcv/delete/{id}', 'UploadCvController@destroy')->name('user.cv.delete');


Route::resource('/user', 'ProfileController');

//build CV
Route::resource('/mycv', 'CvController');
Route::post('/mycv/update/{id}', 'CvController@update')->name('mycv.update');
Route::get('/mycv/delete/{id}', 'CvController@destroy')->name('mycv.delete');

//user education route

Route::resource('/education', 'UserEducationController');
Route::post('/education/update/{id}', 'UserEducationController@update')->name('education.update');
Route::get('/education/delete/{id}', 'UserEducationController@destroy')->name('education.delete');








Route::prefix('admin')->group(function (){

    //news section     **********xxxxx***************
    Route::get('/news', 'NewsController@showNews')->name('admin.news');

    //view single news
    Route::get('/news/single/{id}', 'NewsController@singleNews')->name('admin.news.single');

    //create a new from
    Route::get('/news/createForm', 'NewsController@createNewsForm')->name('admin.createNews.form');

    //post a news
    Route::post('/news/create', 'NewsController@createNews')->name('admin.createNews');

    //Edit the news from
    Route::get('/news/edit/{id}', 'NewsController@editNews')->name('admin.editNews');
    //update a new 
    Route::post('/news/update/{id}', 'NewsController@updateNews')->name('admin.updateNews');

    //delete news
    Route::get('/news/delete/{id}', 'NewsController@deleteNews')->name('admin.deleteNews');

    //Start New Category ******************xxxxxxxxxxxxxxxxxx***************

    

    //view news Category
    Route::get('/news/category/show', 'NewsCategoryController@index')->name('admin.newsCategory.show');
    //Create news category
    Route::post('/news/category/store', 'NewsCategoryController@store')->name('admin.newsCategory.store');
    //edit news category form
    Route::get('/news/category/edit/{id}', 'NewsCategoryController@edit')->name('admin.newsCategory.edit');
    //update news category
    Route::post('/news/category/update/{id}', 'NewsCategoryController@update')->name('admin.newsCategory.update');
    //Delete news category
    Route::get('/news/category/delete/{id}', 'NewsCategoryController@destroy')->name('admin.newsCategory.destroy');

    

    

    //End News Category ******************xxxxxxxxxxxxxxxxxx****************


    //end news section ***********xxxx***************

   //contact
    Route::get('/contact', 'AboutController@contact')->name('admin.contact');
    //contact detail
    Route::get('/contact/detail/{id}', 'AboutController@contactDetail')->name('admin.contact.detail');
    
    //detete contact
    Route::get('/contact/delete/{id}', 'AboutController@contactDelete')->name('admin.contact.delete');
    
    //about page setting
    Route::get('/about', 'AboutController@index')->name('admin.index');
    //about store
    Route::post('/about/store', 'AboutController@store')->name('about.store');
    //update about
    Route::post('/about/update/{id}', 'AboutController@update')->name('about.update');
    //edit about
    Route::get('/about/edit/{id}', 'AboutController@edit')->name('about.edit');
    //delete
    Route::get('/about/delete/{id}', 'AboutController@delete')->name('about.delete');

    //term and condition section
    Route::get('/term-condition', 'AboutController@termCondition')->name('admin.termCondition');

    Route::post('/term-condition/store', 'AboutController@storeTermCondition')->name('admin.termCondition.store');

    Route::get('/term-Condition/edit/{id}', 'AboutController@termConditionEdit')->name('admin.termCondition.edit');

    Route::post('/term-Condition/update/{id}', 'AboutController@termConditionUpdate')->name('admin.termCondition.update');

    Route::get('/term-Condition/delete/{id}', 'AboutController@termConditionDelete')->name('admin.termCondition.delete');

    //job seeker
    Route::get('/alljobseeker', 'AdminController@showAlljobseeker')->name('admin.jobseeker');
    Route::get('/jobseeker/single/{jobseeker_id}', 'AdminController@singleJobseeker')->name('admin.jobseeker.single');
    
    //job seeker

    Route::get('/login', 'auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/postjob', 'AdminController@showPostjobForm')->name('admin.postjob');
    Route::post('/postjob', 'AdminController@postjob')->name('admin.postjob.submit');


    //view category
//    Route::get('/showcategory', 'CategoryController@showCategory')->name('admin.showcategory');
//    Route::get('/category', 'CategoryController@showCategoryForm')->name('admin.category');
//    Route::post('/category', 'CategoryController@store')->name('admin.showcategory.submit');
    Route::resource('/category', 'CategoryController');
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');


// industry type route controller
    Route::resource('/industry', 'IndustryTypeController');
    Route::get('/industry/delete/{id}', 'IndustryTypeController@destroy')->name('industry.delete');
    Route::get('/industry/edit/{id}', 'IndustryTypeController@edit')->name('industry.edit');
    Route::post('/industry/update/{id}', 'IndustryTypeController@update')->name('industry.update');

// job location
    Route::resource('/location', 'LocationController');
    Route::get('/location/edit/{id}', 'LocationController@edit')->name('location.edit');
    Route::post('/location/update/{id}', 'LocationController@update')->name('location.update');
    Route::get('/location/delete/{id}', 'LocationController@destroy')->name('location.delete');
// job employee Size
    Route::resource('/employeeSize', 'EmployeeSizeController');
    Route::get('/employeeSize/edit/{id}', 'EmployeeSizeController@edit')->name('employeeSize.edit');
    Route::post('/employeeSize/update/{id}', 'EmployeeSizeController@update')->name('employeeSize.update');
    Route::get('/employeeSize/delete/{id}', 'EmployeeSizeController@destroy')->name('employeeSize.delete');
// job company type
    Route::resource('/companyType', 'CompanyTypeController');
    Route::get('/companyType/edit/{id}', 'CompanyTypeController@edit')->name('companyType.edit');
    Route::post('/companyType/update/{id}', 'CompanyTypeController@update')->name('companyType.update');
    Route::get('/companyType/delete/{id}', 'CompanyTypeController@destroy')->name('companyType.delete');
// job Salary Range
    Route::resource('/salaryRange', 'SalaryRangeController');
    Route::get('/salaryRange/edit/{id}', 'SalaryRangeController@edit')->name('salaryRange.edit');
    Route::post('/salaryRange/update/{id}', 'SalaryRangeController@update')->name('salaryRange.update');
    Route::get('/salaryRange/delete/{id}', 'SalaryRangeController@destroy')->name('salaryRange.delete');

// job Contract type
    Route::resource('/contractType', 'ContractTypeController');
    Route::get('/contractType/edit/{id}', 'ContractTypeController@edit')->name('contractType.edit');
    Route::post('/contractType/update/{id}', 'ContractTypeController@update')->name('contractType.update');
    Route::get('/contractType/delete/{id}', 'ContractTypeController@destroy')->name('contractType.delete');
// job degree
    Route::resource('/degree', 'DegreeController');
    Route::get('/degree/edit/{id}', 'DegreeController@edit')->name('degree.edit');
    Route::post('/degree/update/{id}', 'DegreeController@update')->name('degree.update');
    Route::get('/degree/delete/{id}', 'DegreeController@destroy')->name('degree.delete');

    // job preferred level
    Route::resource('/preferredLevel', 'PreferredLevelController');
    Route::get('/preferredLevel/edit/{id}', 'PreferredLevelController@edit')->name('preferredLevel.edit');
    Route::post('/preferredLevel/update/{id}', 'PreferredLevelController@update')->name('preferredLevel.update');
    Route::get('/preferredLevel/delete/{id}', 'PreferredLevelController@destroy')->name('preferredLevel.delete');
// job preferred Experience
    Route::resource('/preExperience', 'PreferredExperController');
    Route::get('/preExperience/edit/{id}', 'PreferredExperController@edit')->name('preExperience.edit');
    Route::post('/preExperience/update/{id}', 'PreferredExperController@update')->name('preExperience.update');
    Route::get('/preExperience/delete/{id}', 'PreferredExperController@destroy')->name('preExperience.delete');

//make job active or expired
    Route::get('/makeJobActive/{job_id}', 'JobController@makeJobActive')->name('admin.makeJobActive');
    Route::get('/makeJobExpired/{job_id}', 'JobController@makeJobExpired')->name('admin.makeJobExpired');
        

//create new job
    Route::resource('/createjob', 'JobController');

    Route::post('/createjob/{id}', 'JobController@store')->name('createjob.postjob');
    Route::get('/createjob/edit/{id}/{company_id}', 'JobController@edit')->name('createjob.edit');
    Route::post('/createjob/update/{id}/{company_id}', 'JobController@update')->name('createjob.update');
    Route::get('/delete/{id}/{company_id}', 'JobController@destroy')->name('deletejob');

    //company controller
    Route::resource('/company', 'CompanyController');
    Route::get('/company/profile/{id}', 'CompanyController@show')->name('admin.company.profile');
    Route::post('/company/update/{id}', 'CompanyController@update')->name('company.update');
    Route::get('/company/delete/{id}', 'CompanyController@destroy')->name('company.delete');
    Route::post('/company/updatePassword/{company_id}', 'CompanyController@companyUpdatePassword')->name('company.updatepassword');

    Route::resource('/company/note', 'NoteController');
    Route::post('/company/note/{id}', 'NoteController@store')->name('company.note');



    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

//    //Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


//user-admin profile
    Route::get('/showAdminProfile/{id}', 'AdminController@showAdminProfile')->name('admin.adminProfile');
    Route::get('/adminProfile/edit/{id}', 'AdminController@EditAdminProfileForm')->name('admin.adminProfile.edit');
    Route::post('/adminProfile/edit/{id}', 'AdminController@updateAdminProfile')->name('admin.adminProfile.edit');
    Route::get('/adminProfile/delete/{id}', 'AdminController@destroy')->name('admin.adminProfile.delete');

    Route::get('/register', 'AdminController@showRegister')->name('admin.register');
    Route::post('/register/user', 'AdminController@store')->name('admin.storeUser');

    Route::get('/allUser', 'AdminController@showAllUser')->name('admin.showUsers');
    Route::get('/adminProfile/{id}', 'AdminController@makeAdmin')->name('admin.makeAdmin');
    Route::get('/adminProfileRemovePermission/{id}', 'AdminController@removePermission')->name('admin.removeAdmin');

    //update admin password

    Route::get('/updatePassword/{id}', 'AdminController@formUpdatePassword')->name('admin.updatepassword');
    Route::post('/updatePassword/{id}', 'AdminController@updatePassword');

    //search company
    Route::get('/search', 'CompanyController@companySearch')->name('company.search');

//    // Password reset routes
//    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
//    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
//    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


// employee route
//    Route::prefix('employer')->group(function () {
//
//        //Route::get('/register', 'employer\EmployerRegisterController@createRegister')->name('employer.register');
//        Route::get('/login', 'employer\EmployerLoginController@showLoginForm')->name('employer.login');
//
//    });

   // Route::get('/employer', 'EmployerControler@index');

});




