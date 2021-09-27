<?php

namespace App\Http\Controllers;

use App\HrAction;
use App\HrInterview;
use App\HrInvite;
use App\HrPerson;
use App\HrQuestions;
use App\HrPersonApplicationForm;
use Illuminate\Http\Request;

class HrPersonApplicationFormController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($aplicationFormId = null, $personId = null)
    {

        $applicationForm = new HrPersonApplicationForm();

        $form = $applicationForm->getEditForm($aplicationFormId, $personId, 'store');
        return view('hr.person_application_form.application_form_edit',
            $form);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = $request->all();
        $applicationForm = new HrPersonApplicationForm();
        $result = $applicationForm->updateOrCreateApplicationForm($form);

        return view('hr.person_application_form.application_form_finish');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = new HrQuestions();


        return view('hr.person_info_form',
            $questions->getEditForm($id));

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
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($applicationFormId)
    {
        $applicationForm = new HrPersonApplicationForm();
        $form = $applicationForm->showApplicationForm($applicationFormId);

        return view('hr.person_application_form.application_form_show',
            $form);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function list($id)
    {
        //
    }


}
