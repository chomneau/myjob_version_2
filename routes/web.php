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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/test', 'FindJobController@testform')->name('testform');
Route::post('/test', 'FindJobController@storedata')->name('storedata');



Route::get('/', 'FindJobController@index');


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



Route::get('/form', 'PagesController@form');
Route::post('/form', 'PagesController@store');

Auth::routes();
Route::get('/about', 'PagesController@getAbout');
Route::get('/about/setting', 'PagesController@aboutSetting')->name('about.setting');
Route::post('/about/setting', 'PagesController@aboutPageSetting')->name('about.pageSetting');

Route::get('/contact', 'PagesController@getContact');

Route::get('/postjob', 'PagesController@getPostjob');


//findjob
Route::get('/findjob', 'FindJobController@index')->name('findjob');
Route::get('/singleJob/{id}/{company_id}', 'FindJobController@show')->name('singleJob');

Route::get('/jobByCategory/{id}', 'FindJobController@jobByCategory')->name('jobByCategory');
Route::get('/allCategory/{id}', 'FindJobController@allCategory')->name('allCategory');

//find by location
Route::get('/jobByLocation/{id}', 'FindJobController@jobByLocation')->name('jobByLocation');
Route::get('/allLocation', 'FindJobController@allLocation')->name('allLocation');

Route::get('/jobByIndustry/{id}', 'FindJobController@jobByIndustry')->name('jobByIndustry');
Route::get('/allIndustry', 'FindJobController@allIndustry')->name('allIndustry');

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




