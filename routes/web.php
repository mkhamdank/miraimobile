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

Route::get('/','MasterController@index')->name('login');
Route::post('/auth','MasterController@auth');
Route::get('/kuisioner_corona','MasterController@corona');
Route::get('check/employee_id','MasterController@checkEmployeeId');
Route::post('post/form', 'MasterController@postForm');
Route::post('post/form_survey', 'MasterController@postFormSurvey');
Route::post('input/survey_stocktaking', 'StocktakingController@inputSurvey');
Route::post('post/reset_password', 'MasterController@resetPassword');
Route::get('/attendance','AttendanceController@index');
Route::get('index/getGrup','MasterController@getGrup');
Route::get('index/getPengumuman','MasterController@getPengumuman');
Route::get('index/getKehadiran','MasterController@getKehadiran');

Route::get('/get_employee','MasterController@get_employee');
Route::get('/get_employee_sunfish','MasterController@get_employee_sunfish');
Route::get('/kuisioner_emergency_1','MasterController@emergency1');
Route::get('/kuisioner_emergency_2','MasterController@emergency2');
Route::get('/kuisioner_emergency_3','MasterController@emergency3');
Route::get('/kuisioner_emergency_4','MasterController@emergency4');
Route::get('/kuisioner_emergency_5','MasterController@emergency5');
Route::post('post/kuisioner_emergency', 'MasterController@inputEmergency');

Route::get('/vaksin','MasterController@indexVaksin');
Route::post('/vaksin/input','MasterController@inputVaksin');

Route::get('/pedulilindungi','MasterController@indexPeduliLindungi');
Route::post('/pedulilindungi/input','MasterController@inputPeduliLindungi');

Route::get('/esport','MasterController@indexEsport');
Route::post('/esport/input','MasterController@inputEsport');
Route::get('/esport/quiz/{id}','MasterController@indexEsportQuiz');

Route::get('/pkb/{periode}','MasterController@indexPkb');
Route::post('/input/pkb','MasterController@inputPkb');

Route::post('/input/kode/etik','MasterController@inputKodeEtik');


Route::get('/vaksin/registration','MasterController@indexNewVaksinRegistration');
Route::post('/vaksin/registration/input','MasterController@inputNewVaksinRegistration');

Route::get('/vaksin/qr','MasterController@indexVaksinQR');

Route::get('/guest_assessment','MasterController@guest_assessment');
Route::post('post/guest_assessment', 'MasterController@inputGuestAssessment');


Route::get('/vendor_assessment','MasterController@vendor_assessment');
Route::post('post/vendor_assessment', 'MasterController@inputVendorAssessment');

Route::post('reload_captcha', 'MasterController@reloadCaptcha');

Route::get('index/oculus/auth/{employee_id}', 'OculusController@indexAuth');
Route::get('index/oculus/result/{employee_id}/{answer}/{sub_answer}/{result}', 'OculusController@indexResult');
Route::get('index/oculus/fetch_score/{employee_id}', 'OculusController@fetchResult');

Route::get('/cms','MasterController@indexCms');
Route::post('post/cms', 'MasterController@inputCms');

//Data HR
Route::get('data/calon_karyawan', 'HumanResourceController@indexCalonKaryawan');


Route::get('/welcome_trial', function () {
	return view('welcome_trial');
});



//Raw material
Route::get('po_confirmation','RawMaterialController@indexPoConfirmation');
Route::get('fetch/po','RawMaterialController@fetchPo');
Route::post('input/po_confirmation', 'RawMaterialController@inputPoConfirmation');
Route::get('send/po_notification/{po_number}', 'RawMaterialController@sendPoNotification');


//Check Connection
Route::get('check/database_conn','TrialController@checkConnection');
