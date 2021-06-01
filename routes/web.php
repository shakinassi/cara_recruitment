<?php

use Dotenv\Result\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\JobController;

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


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'HomeController@index');

#Form

Route::get('/new-register', function()
    {
        return view('newAuth.newRegister');
    });

Route::get('/', 'MainFormController@index');
Route::get('/create', 'MainFormController@create');
Route::post('/success', 'MainFormController@store')->name('mainform');
Route::get('/applyjob/{id}', 'PositionFormController@applyposition')->name('job-apply');
Route::get('/pcreate', 'PositionFormController@create');
Route::post('/apply-success', 'PositionFormController@store')->name('success');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    #Admin after logged in
    Route::get('/admin', 'DashboardController@index')->name('dashboard');
    
    #Dashboard Company
    Route::get('/CaraComMy', 'DashboardController@CCM')->name('CaraComMy');
    Route::get('/NSTCara', 'DashboardController@NST')->name('NSTCara');
    Route::get('/CaraSkadimo', 'DashboardController@CSKA')->name('CaraSkadimo');
    Route::get('/CaraSolution', 'DashboardController@CSOL')->name('CaraSolution');


    #Job
    Route::resource('jobs', 'JobController');
    Route::post('/toggle-status', 'JobController@active')->name('status');

    
    #Company
    Route::resource('company', 'JobCompanyController');
    Route::post('/createcompany', 'JobCompanyController@insert_logo')->name('insert_logo');

    #Category
    Route::resource('category', 'JobCategoryController');
    Route::get('category{id}', 'JobCategoryController@update')->name('category.update');
   
    #General Candidate 
    Route::get('/candidate', 'GeneralCandidateController@index')->name('candidate');
    Route::get('approve', 'GeneralAcceptedController@index')->name('accepted');
    Route::get('reject', 'GeneralRejectedController@index')->name('rejected');
    Route::get('application/approve/{id}', 'GeneralCandidateController@postApprove')->name('application2');
    Route::get('application/reject/{id}', 'GeneralCandidateController@postReject')->name('application');;
    Route::resource('/updatereject', 'GeneralRejectedController');
    Route::resource('/updateapprove', 'GeneralAcceptedController');

    #Position Candidate
    Route::get('/pcandidate', 'PositionCandidateController@index')->name('pcandidate');
    Route::get('papprove', 'PositionAcceptedController@index')->name('paccepted');
    Route::get('preject', 'PositionRejectedController@index')->name('prejected');
    Route::post('papplication/approve/{id}', 'PositionCandidateController@postApprove')->name('papplication2');
    Route::post('papplication/reject/{id}', 'PositionCandidateController@postReject')->name('papplication');;
    Route::resource('/pupdatereject', 'PositionRejectedController');
    Route::resource('/pupdateapprove', 'PositionAcceptedController');
    Route::get('/download/{file}','GeneralCandidateController@download')->name('download');

    #Dashboard Company
    Route::get('/CaraComMy', 'DashboardController@CCM')->name('CaraComMy');
    Route::get('/NSTCara', 'DashboardController@NST')->name('NSTCara');
    Route::get('/CaraSkadimo', 'DashboardController@CSKA')->name('CaraSkadimo');
    Route::get('/CaraSolution', 'DashboardController@CSOL')->name('CaraSolution');



   
});




// Auth::routes();

// Route::group(['middleware' => 'auth'], function () {

 

//     #Admin::Candidate (general)
//     Route::get('/admin', 'DashboardController@index')->name('Dashboard');
//     Route::get('/candidate', 'GeneralCandidateController@index')->name('admin.joblisting');
//     Route::resource('approve', 'GeneralAcceptedController');
//     Route::resource('reject', 'GeneralRejectedController');
//     Route::get('application/approve/{id}', 'GeneralCandidateController@postApprove')->name('application');
//     Route::get('application/reject/{id}', 'GeneralCandidateController@postReject')->name('application2');
//     Route::resource('/updatereject', 'GeneralRejectedController');
//     Route::resource('/updateapprove', 'GeneralAcceptedController');


//     Route::resource('pcandidate', 'PositionCandidateController');

//     #Admin::Job
//     Route::resource('jobs', JobController::class); 
//     Route::post('/toggle-status', 'JobController@active')->name('status');

//     #Admin::Company
//     Route::post('/create/upload', 'CompanyController@insert_logo')->name('insert_logo');
//     // Route::post('/update', 'CompanyController@update')->name('update');
//     Route::resource('company', 'CompanyController');
//     Route::resource('company', CompanyController::class);


//     #Admin::category
//     Route::resource('category', JobCategoryController::class);
//     Route::resource('/updatecategory', 'JobcategoryController');


//     #Dashboard Company
    
//     Route::get('/CaraComMy', 'DashboardController@CCM')->name('CaraComMy');
//     Route::get('/NSTCara', 'DashboardController@NST')->name('NSTCara');
//     Route::get('/CaraSkadimo', 'DashboardController@CSKA')->name('CaraSkadimo');
//     Route::get('/CaraSolution', 'DashboardController@CSOL')->name('CaraSolution');

//  // Route::prefix('admin')->group(function () {
//     Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
//         #applicants
//         Route::resource('applicants', 'ApplicantsController');
//     });



// });


//    #Recruitment Form(main)
//    Route::get('/create/upload', 'GeneralFormController@create');
//    Route::get('/', 'GeneralFormController@index');     
//    Route::post('success/upload', 'GeneralFormController@store')->name('generalForm');
//    Route::get('/download/{file}','GeneralCandidateController@download')->name('download');

//    Route::get('/applyjob/{id}', 'GeneralFormController@applyposition')->name('job-apply');

