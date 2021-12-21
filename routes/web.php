<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/',function()
{
    return Redirect::to('login');
});

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');

//==================Social login section ===============================
Route::get('login/{provider}', 'SocialController@redirect'); 
Route::get('login/{provider}/callback','SocialController@Callback');


//=======================Admin section=======================================
Route::get('/admin/home','AdminController@index')->name('dashboard');

//=========schools==============
Route::get('admin/schools','AdminController@link_to_schools')->name('schools');
Route::post('admin/save_school_details','AdminController@save_school_details');
Route::get('edit_school','AdminController@edit_school');
Route::post('admin/update_about', 'AdminController@update_about');
Route::post('admin/edit_school_details', 'AdminController@edit_school_details');
Route::post('admin/delete_school', 'AdminController@delete_school');
Route::post('admin/edit_photo_2','AdminController@edit_photo_2');
Route::post('admin/edit_photo_1', 'AdminController@edit_photo_1');

    
Route::get('admin/admins','AdminController@link_to_admins')->name('admins');

Route::post('edit/user_role','AdminController@edit_user_role');
//================== applicants===================
Route::get('admin/applicants', 'AdminController@link_to_applicants')->name('applicants');
Route::get('applicant_details', 'AdminController@applicant_details');
// ======================link to  Applications ================================
Route::get('admin/applications', 'AdminController@link_to_applications')->name('applications');
//================== Programs=============================================
Route::get('admin/programs', 'AdminController@link_to_programs')->name('programs');
Route::post('create/program', 'AdminController@create_program');
Route::get('program_details', 'AdminController@program_details');
Route::post('update_requirements','AdminController@update_requirements');
Route::post('update_program_name','AdminController@update_program_name');
Route::post('update_details','AdminController@update_details');
Route::post('delete_program', 'AdminController@delete_program');
// PAYMENT
Route::get('admin/payments','AdminController@link_to_payments')->name('payments');

// Route to fetch the details of an applicant 
Route::get('admin/applicants/{id}', 'AdminController@link_to_an_applicant');

// Route to upload admission status
Route::post('admin/admission_status','AdminController@update_admission_status');
Route::get('get_admission_details','AdminController@get_admission_details');
// ajax function to check if docs exists
Route::get('check_if_docs_exists','ApplicantsController@check_if_docs_exists');






//============== Applicants section ============================================ 
Route::get('/applicants/home','ApplicantsController@index')->name('applicants');


 Route::get('/applicants/profile', 'ApplicantsController@profile')->name('profile');
 
 
Route::get('eligibility','ApplicantsController@link_to_eligibility')->name('eligibility');
Route::post('applicants/submit_personal_info', 'ApplicantsController@submit_personal_info');
Route::post('applicants/submit_address_details', 'ApplicantsController@submit_address_details');
Route::post('applicants/submit_background_informations', 'ApplicantsController@submit_background_informations');
Route::post('applicants/submit_education_summary','ApplicantsController@submit_education_summary');
Route::post('applicants/submit_postgraduate_school','ApplicantsController@submit_postgraduate_school');
Route::post('applicants/submit_postgraduate_school_2','ApplicantsController@submit_postgraduate_school_2');
Route::post('applicants/submit_postgraduate_school_3','ApplicantsController@submit_postgraduate_school_3');
Route::post('applicants/submit_test_scores', 'ApplicantsController@submit_test_scores');
Route::post('applicants/additional_qualification', 'ApplicantsController@additional_qualification');
Route::post('applicants/additional_qualification_2', 'ApplicantsController@additional_qualification_2');
Route::post('applicants/submit_primary_info','ApplicantsController@create_primary_informations');
Route::post('applicants/submit_undergraduate_docs','ApplicantsController@submit_undergraduate_docs');
Route::post('applicants/submit_postgraduate_docs','ApplicantsController@submit_postgraduate_docs');
//ajax function to fetch table programs
Route::get('fetch_program_details','ApplicantsController@fetch_program_details');
Route::get('applications_details','ApplicantsController@applications_details');

//======================= Search section ====================================
Route::get('applicants/programs', 'ApplicantsController@link_to_programs')->name('programs'); 

Route::match(['get', 'post'], 'search',[
        'as' => 'results_path',
        'uses' => 'ApplicantsController@search' ]);


Route::get('search_page','ApplicantsController@search');
Route::get('school/{id}','ApplicantsController@link_to_school_section');
//link to school programs
Route::get('school_programs/{id}', 'ApplicantsController@link_to_school_programs');

//link to payments
Route::get('applicants/payments','ApplicantsController@link_to_payments')->name('applicants_payment');



//==================== Filter Section =====================================



Route::match(['get', 'post'], 'applicants/apply-filter',[
        'as' => 'result_path',
        'uses' => 'ApplicantsController@apply_filter' ]);



//============Paypal integration ==================================================
Route::post('payment', 'PayPalController@payment')->name('payment');

Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');

Route::get('payment/success', 'PayPalController@success')->name('payment.success');



//===============Paystack Integration==============================================
Route::post('paystack','PaystackController@pay_via_paystack');
// callback
Route::get('applicant/callback', 'PaystackController@callback');


//============== link to applications made page==========================
Route::get('applicants/applications', 'ApplicantsController@link_to_applications')->name('applications');
Route::post('applicants/add_to_applications', 'ApplicantsController@add_to_applications');



//=========== Update the time spent on a website by each admin=================
Route::get('time_update','AdminController@update_time');

// route to terms and conditions
Route::get('terms_and_conditions','ApplicantsController@link_to_terms_and_conditions');

Route::get('/terms_and_conditions',function()
{
    $title = "Terms and conditions";
   return view('applicants.terms_and_conditions',compact('title'));
});











