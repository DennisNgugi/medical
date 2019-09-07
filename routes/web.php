<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('department');
Route::group(['middleware' => ['auth','web']], function () {
Route::get('department', 'HomeController@department');
// Patient
Route::post('patient/create', 'PatientController@store');
Route::get('patient', 'PatientController@index');
//Department
Route::get('getDepartment', 'DepartmentController@index');
//Queue
Route::post('queue/create', 'QueueController@store');
Route::get('queue/{department}','QueueController@getDepartmentQueue');
//Report
Route::post('notes/create','ReportController@store');
Route::get('report/{department}','ReportController@getReport');

//Referral
Route::post('referral/create','ReferralController@store');
Route::get('referral/{department}','ReferralController@index');

//Patient Search
Route::get('/patient/search','PatientController@search');



  });
 Route::middleware(['auth','web'])->get('/{any}', 'HomeController@home')->where('any', '.*');
