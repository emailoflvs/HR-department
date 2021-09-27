<?php

use Illuminate\Support\Facades\Route;

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

/*
* Аутентификация и регистрация пользователей Laravel 7
* */
//Auth::routes();

Route::get('/', "HomeController@index");
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hr_person_application_form_create/{applicationFormId}', "HrPersonApplicationFormController@create");
Route::get('/hr_person_application_form_create/{applicationFormId}/person/{personId?}', "HrPersonApplicationFormController@create");
Route::put('/hr_person_application_form_store', "HrPersonApplicationFormController@store");
//Route::get('/hr_person_application_form_edit/{id}', "HrPersonApplicationFormController@edit");
//Route::post('/hr_person_application_form_update/{id}', "HrPersonApplicationFormController@update");
Route::get('/hr_person_application_form_show/{id}', "HrPersonApplicationFormController@show");
//Route::get('/hr_person_application_form_finish', "HrPersonApplicationFormController@finish");

Route::group(['middleware' => 'auth'], function () {

//    Учебный центр
//    Route::get('/training/...', "TrainingController@index");

    //конверсия подбора в учебном центре
    Route::get('/training/conversion', "TrainingController@conversion");

    Route::get('/workplace', "WorkPlaceController@index");
    Route::get('/client', "ClientController@index");
    Route::get('/clients', "ClientsController@index");
    Route::get('/requests', "RequestsController@index");

    Route::post('/working', "WorkPlaceController@workingTime");
    Route::get('/working', "HomeController@index");

    Route::get('/hr_person_create', "HrPersonController@create");
    Route::put('/hr_person_store', "HrPersonController@store");
    Route::get('/hr_person_edit/{id}', "HrPersonController@edit");
    Route::post('/hr_person_update/{id}', "HrPersonController@update");
    Route::get('/hr_people_list', "HrPersonController@list");

    Route::get('/application_forms', "ApplicationFormController@index");
    Route::get('/application_form_create', "ApplicationFormController@create");
    Route::put('/application_form_store', "ApplicationFormController@store");
    Route::get('/application_form_edit/{id}', "ApplicationFormController@edit");
    Route::get('/application_form_update/{id}', "ApplicationFormController@update");
    Route::get('/application_form_show/{id}', "ApplicationFormController@show");

//    Route::get('/hr_person_application_form_list', "HrPersonApplicationFormController@list");

    //Мои собеседования
    Route::get('/hr_operator_interviews', "HrOperatorController@plannedInterviews");

    //Планируемые звонки
    Route::get('/hr_operator_planned_calls', "HrOperatorController@plannedCalls");

    //Беседы после стажировки
    Route::get('/hr_operator_talks_after_internship', "HrOperatorController@talksAfterInternship");

    //Беседы после ИС
    Route::get('/hr_operator_talks_after_probation', "HrOperatorController@talksAfterProbation");

    //Full calendar
    Route::get('fullcalendar', 'FullCalendarController@index');
    Route::post('fullcalendar/create', 'FullCalendarController@create');
    Route::post('fullcalendar/update', 'FullCalendarController@update');
    Route::post('fullcalendar/delete', 'FullCalendarController@destroy');


});

Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

    Route::get('login', function () {
        return redirect('/login');
    })->name("voyager.login");

});

Auth::routes();




