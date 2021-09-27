<?php

namespace App\Http\Controllers;

use App\ApplicationForm;
use App\HrAction;
use App\HrInterview;
use App\HrPerson;
use App\HrPersonApplicationForm;
use App\HrQuestions;
use Illuminate\Http\Request;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicationForm = new ApplicationForm();
        $applicationForms['applicationForms'] = $applicationForm->getApplicationForms();
        return view('hr.application_form.application_form_list',
            $applicationForms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicationForm = new applicationForm();

        $form = $applicationForm->showApplicationForm($id);
        return view('hr.application_form.application_form_show',
            $form);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicationForm = new ApplicationForm();

        return view('hr.application_form.application_form_edit',
            $applicationForm->getEditForm($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
